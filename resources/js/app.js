
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);


import App from './App.vue';
import Agent from './components/Agent.vue';
import CreateAgent from './components/CreateAgent.vue';
import EditAgent from './components/EditAgent.vue';
import Appcustomer from './AppCustomer.vue';
import CreateCustomer from './components/CreateCustomer.vue';
import EditCustomer from './components/EditCustomer';
import Customer from './components/Customer.vue';

const routes = [
  {
    name: 'Agent',
    path: '/',
    component: Agent
  },
  {
    name: 'CreateAgent',
    path: '/CreateAgent',
    component: CreateAgent
  },
  {
    name: 'EditAgent',
    path: '/EditAgent',
    component: EditAgent,

  }
];


const customer_routes = [
    {
      name: 'appcustomer',
      path: '/AppCustomer',
      component: Appcustomer,
    },
    {
        name: 'Customer',
        path: '/Customer',
        component: Customer,
    },
    {
        name: 'createcustomer',
        path: '/CreateCustomer',
        component: CreateCustomer,
      },
      {
        name: 'editcustomer',
        path: '/EditCustomer',
        component: EditCustomer,
      },
  ];

const router = new VueRouter({ mode: "history", routes: routes});
const customer_router = new VueRouter({ mode: "history", routes: customer_routes});


// const agent = new Vue({
//     el: '#agent`',
//     router: router,
//     render: h => h(App),
// });



const customer = new Vue({
    el: '#customer',
    router: customer_router,
    render: h => h(Appcustomer),
});





