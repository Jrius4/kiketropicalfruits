<template>
  <div>
      <h4>Inquiries</h4>
  </div>
</template>

<script>
import {mapState,mapActions} from 'vuex'
export default {
    name:'InquiriesComponent',
    computed:{
        ...mapState({
            inquiries:state=>state.inquiriesModule.inquiries
        })
    },
    methods:{
        ...mapActions({
            GET_INQUIRIES_ACTION:'inquiriesModule/GET_INQUIRIES_ACTION'
        }),
        getData(){
            let pagination = {
            val: "",
            page: 1,
            sortRowsBy: 'created_at',
            rowsPerPage: 15,
            sortDesc: true,
          };
            this.GET_INQUIRIES_ACTION(pagination);
        }
    },
    mounted(){
        this.getData();
    }

}
</script>

<style>

</style>
