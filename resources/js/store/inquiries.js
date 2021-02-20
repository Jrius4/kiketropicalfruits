import Axios from "axios";
export default {
    namespaced: true,
    state: {
        totalinquiries:0,
        inquiry:null,
        inquiries:[],
        totalrowsPerPageinquiries:0,
        inquiriesSortRowsBy:'created_at',
        totalinquiries:0,
        message: '',
        openWindow: 1,
        items: [],
        inquiriesPagination: {
            page: 1,
            rowsPerPage: 15
        },
    },
    getters: {

    },
    mutations: {
        GET_INQUIRY(currentState,payload) {

        },
        GET_INQUIRIES(currentState,payload) {
            currentState.inquiries = payload.inquiries.data;
            currentState.inquiriesPagination.page = parseInt(
                payload.inquiries.current_page
            );

            currentState.inquiriesPagination.rowsPerPage = parseInt(
                payload.inquiries.per_page
            );
            currentState.totalinquiries = parseInt(payload.inquiries.total);
            currentState.inquiriesSortRowsBy = payload.sortRowsBy || "created_at";
        },
    },
    actions: {
        GET_INQUIRY_ACTION(context, payload) {

        },
        GET_INQUIRIES_ACTION(context, payload) {
            console.log({payload})
            return new Promise((resolve,reject)=>{
                const keywords = payload.val || "";
                    const page = payload.page || 1;
                    const rowsPerPage = payload.rowsPerPage || 5;
                    const sortDesc = payload.sortDesc || null;
                    const sortRowsBy = payload.sortRowsBy || "";
                    let url = `/inquiries`;
                Axios.get(url,{params: {
                    rowsPerPage,
                    page,
                    sortDesc,
                    sortRowsBy,
                    keywords
                }}).then(res=>{
                    const result = res.data;
                    context.commit('GET_INQUIRIES',result);
                    resolve(resolve);
                }).catch(err=>{
                    console.log({ err });
                    reject(err);
                });
            });
        },
    },
};
