import Vue from 'vue';
import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import AdminComponent from "./components/AdminComponent";
import MyMeetingsComponent from "./components/MyMeetingsComponent";
import MyDocumentsComponent from "./components/MyDocumentsComponent";
import MyNewslettersComponent from "./components/MyNewslettersComponent";
import CreateContactComponent from "./components/CreateContactComponent";
import CreateRacMeeting from "./components/CreateRacMeeting";
import ManageRacMeetings from "./components/ManageRacMeetings";
import ManageRegionsComponent from "./components/ManageRegionsComponent";
import ManageDocument from "./components/ManageDocument";
import ManageNewsletter from "./components/ManageNewsletter";
import EditContactComponent from "./components/EditContactComponent";
import EditMeetingComponent from "./components/EditMeetingComponent";
import CommentsComponent from "./components/CommentsComponent";
import UpdateDocumentComponent from "./components/UpdateDocumentComponent";
import UpdateNewsletterComponent from "./components/UpdateNewsletterComponent";
import AdminChatComponent from "./components/AdminChatComponent";
import GroupChatComponent from "./components/GroupChatComponent";
import UserChatComponent from "./components/UserChatComponent";
import GroupAdminChatComponent from "./components/GroupAdminChatComponent";

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [

        {
            path: '/admin',
            name: 'AdminComponent',
            component: AdminComponent,
        },

        {
            path: '/mymeetings',
            name: 'MyMeetingsComponent',
            component: MyMeetingsComponent,
        },

        {
            path: '/myDocuments',
            name: 'MyDocumentsComponent',
            component: MyDocumentsComponent,
        },


        {
            path: '/myNewsletters',
            name: 'MyNewslettersComponent',
            component: MyNewslettersComponent,
        },


        {
            path: '/home',
            name: 'HomeComponent',
            component: HomeComponent,
        },
        {
            path: '/addContact',
            name: 'CreateContactComponent',
            component: CreateContactComponent,
        },
        {
            path: '/manageRegions',
            name: 'ManageRegionsComponent',
            component: ManageRegionsComponent,
        },
        {
            path: '/createRacMeeting',
            name: 'CreateRacMeeting',
            component: CreateRacMeeting,
        },
        {
            path: '/manageMeetings',
            name: 'ManageRacMeetings',
            component: ManageRacMeetings,
        },
        {
            path: '/editMeeting',
            name: 'editMeeting',
            component: EditMeetingComponent,
        },
        {
            path: '/manageDocuments',
            name: 'ManageDocuments',
            component: ManageDocument,
        },

        {
            path: '/manageNewsletters',
            name: 'manageNewsletters',
            component: ManageNewsletter,
        },
        {
            path: '/editContact/',
            name: 'EditContactComponent',
            component: EditContactComponent,
        },
        {
            path: '/comments/',
            name: 'CommentsComponent',
            component: CommentsComponent,
        },
        {
            path: '/update-document',
            name: 'UpdateDocumentComponent',
            component: UpdateDocumentComponent,
        },

        {
            path: '/update-newsletter',
            name: 'UpdateNewsletterComponent',
            component: UpdateNewsletterComponent,
        },

        {
            path: '/admin-chat',
            name: 'AdminChatComponent',
            component: AdminChatComponent,
        },

        {
            path: '/my-chat',
            name: 'UserChatComponent',
            component: UserChatComponent,
        },


        {
            path: '/group-chat',
            name: 'GroupChatComponent',
            component: GroupChatComponent,
        },
        {
            path: '/admin-group-chat',
            name: 'GroupAdminChatComponent',
            component: GroupAdminChatComponent,
        }

    ],
    mode: 'history',
});

export default router;