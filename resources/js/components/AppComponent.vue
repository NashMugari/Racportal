<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import HomeComponent from "./HomeComponent";
    import AdminComponent from "./AdminComponent"
    import MyRegionsComponent from "./MyMeetingsComponent";
    import CreateContactComponent from "./CreateContactComponent";
    import AddRegionComponent from "./ManageRegionsComponent";
    import CreateRacMeeting from "./CreateRacMeeting";
    import CommentsComponent from "./CommentsComponent";
    import UpdateDocumentComponent from "./UpdateDocumentComponent";
    import UpdateNewsletterComponent from "./UpdateNewsletterComponent";
	import AdminChatComponent from "./AdminChatComponent";


    export default {
        name: "AppComponent",
        component(id) {
            AdminComponent,
            HomeComponent,
            MyRegionsComponent,
            CreateContactComponent,
            AddRegionComponent,
            CreateRacMeeting,
            CommentsComponent,
            UpdateDocumentComponent,
            UpdateNewsletterComponent,
			AdminChatComponent
        }


    }
</script>

<style scoped>
</style>
