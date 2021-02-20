<template>
  <div>
      <v-app style="height: 100px">
          <v-main>
              <v-container fluid>
                  <v-row align="baseline" justify="center">
                      <v-col cols="12" lg="12" md="12">
                          <v-card>
                              <v-card-title>
                                  Inquiries
                              </v-card-title>
                              <v-card-text>
                                  <v-window v-model="inquiriesStep">
                                    <v-window-item :value="1">
                                            <v-data-table
                                                dense
                                                v-model="selectedinquiries"
                                                :search="search"
                                                item-key="id"
                                                :headers="headers"
                                                :items="inquiries"
                                                :sort-by="inquiriesSortRowsBy"
                                                class="mr-2"
                                                :loading="loading"
                                                :options.sync="options"
                                                :items-per-page="totalrowsPerPageinquiries"
                                                :server-items-length="totalinquiries"
                                            >
                                            <template v-slot:top>
                                                    <v-row flat align="baseline" justify="space-around">
                                                        <v-col cols="12" md="12" sm="12">
                                                        <v-text-field
                                                            v-model="search"
                                                            autofocus
                                                            append-icon="mdi-database-search"
                                                            label="Quick Search Inquiries"
                                                            clearable
                                                        ></v-text-field>
                                                        </v-col>

                                                    </v-row>
                                                </template>
                                                <template v-slot:item.action="{ item }">
                                                    <v-btn icon color="teal" small @click="viewItem(item)">
                                                        <v-icon small> mdi-eye </v-icon>
                                                    </v-btn>
                                                </template>

                                            </v-data-table>
                                    </v-window-item>
                                    <v-window-item :value="2">
                                        <div class="container">
                                            <div class="row">

                                                <div class="col-12">
                                                    <v-btn @click="viewTable()">Back</v-btn>
                                                </div>
                                                <div class="col-12">
                                                    <table class="table table-success table-striped" v-if="selectedinquiry !== null">
                                                        <tbody>
                                                            <tr>
                                                                <th>Name</th>
                                                                <td>{{selectedinquiry.name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Phone</th>
                                                                <td>{{selectedinquiry.phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email</th>
                                                                <td>{{selectedinquiry.email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Message</th>
                                                                <td><p class="lead">{{selectedinquiry.message}}</p>
                                                                    </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>

                                            </div>
                                        </div>


                                    </v-window-item>
                                </v-window>
                              </v-card-text>
                          </v-card>
                      </v-col>

                  </v-row>
              </v-container>
          </v-main>
      </v-app>
  </div>
</template>

<script>
import {mapState,mapActions} from 'vuex'
export default {
    name:'InquiriesComponent',
    data:()=>{
      return {
            search: "",
            selectedinquiry:null,
            loading: false,
            inquiriesStep: 1,
            selectedinquiries: [],
            options: {},
            headers: [
                { text: "Name", align: "left", value: "name" },
                { text: "Phone", align: "left", value: "phone" },
                { text: "Email", align: "left", value: "email" },
                { text: "Date", align: "left", value: "created_at" },
                { text: "Action", align: "left", value: "action", sortable: false },
            ],
          }
    },
    computed:{
        ...mapState({
            inquiries:state=>state.inquiriesModule.inquiries,
            totalinquiries:state=>state.inquiriesModule.totalinquiries,
            totalrowsPerPageinquiries:state=>state.inquiriesModule.inquiriesPagination.rowsPerPage,
            inquiriesSortRowsBy:state=>state.inquiriesModule.inquiriesSortRowsBy,
            inquiriesPagination:state=>state.inquiriesModule.inquiriesPagination,
        })
    },
    methods:{
        ...mapActions({
            GET_INQUIRIES_ACTION:'inquiriesModule/GET_INQUIRIES_ACTION'
        }),
        getData(){
           this.loading = true;
            return new Promise((resolve, reject) => {
                const { sortBy, sortDesc, page, itemsPerPage } = this.options;

                const search = this.search;
                let pageNew = page;
                let pagination = {};
                if (!search) {
                    pagination = {
                        val: search,
                        page: pageNew,
                        sortRowsBy: sortBy[0],
                        rowsPerPage: itemsPerPage,
                        sortDesc: sortDesc[0],
                    };

                    this.GET_INQUIRIES_ACTION(pagination)
                        .finally(() => {
                        this.loading = false;
                        });
                } else if (search.length > 0) {
                if (pageNew > 1) {
                    pageNew = this.inquiries.length === 0 ? 1 : pageNew;
                    this.loading = true;
                    pagination = {
                    val: search,
                    page: pageNew,
                    sortRowsBy: sortBy[0],
                    rowsPerPage: itemsPerPage,
                    sortDesc: sortDesc[0],
                    };
                    this.GET_INQUIRIES_ACTION(pagination)
                    .finally(() => {
                        this.loading = false;
                    });
                } else {
                    pageNew = 1;
                    this.loading = true;
                    pagination = {
                    val: search,
                    page: pageNew,
                    sortRowsBy: sortBy[0],
                    rowsPerPage: itemsPerPage,
                    sortDesc: sortDesc[0],
                    };

                    this.GET_INQUIRIES_ACTION(pagination)
                    .finally(() => {
                        this.loading = false;
                    });
                }
                }
            });

        },
        viewItem(item){
            this.selectedinquiry = item;
            this.inquiriesStep = 2;

        },
        viewTable(){
            this.getData();
                this.inquiriesStep = 1;
                this.selectedinquiry = null;



        }

    },
    mounted(){
        this.getData();
    },
    watch: {
        search(value) {
        if (!this.search) {
            this.search = "";
        }
        if (this.search !== "") {
            this.getData();
        }
        this.getData();
        },
        options: {
        handler() {
            this.getData();
        },
        deep: true,
        },
    },

}
</script>

<style>

</style>
