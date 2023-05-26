<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div  v-if="deleted" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Document deleted successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div  v-if="submitted" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Comment submitted successfully!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div v-if="errors.length > 0">
                    <div  v-for="(error, index) in errors"
                          :key="index"
                          class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{error}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Comments/{{document.name}}</div>
                        <div class="card-body">
                            <div>
                                <button text type="button" class="btn btn-dark mx-1"
                                       style="background:#b90f00"
                                       data-toggle="modal"
                                       data-target="#commentModal">Add new Comment</button>
                                <router-link to="/manageDocuments">
                                    <button type="button" class="btn btn-dark mx-1" style="background:#b90f00">Back</button>
                                </router-link>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="list-group">
                                        <li v-for="(comment, index) in comments"
                                            :key="index"
                                            class="list-group-item list-group-item-secondary">{{comment.comment}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row" v-if="comments.length == 0">
                                    <strong>No comment available for this document</strong>
                            </div>
                            <div v-if="errors.length > 0" class="alert-danger">
                                {{errors[0]}}
                            </div>

                            <!-- Add Comment Modal -->
                            <div class="modal fade"
                                 id="commentModal"
                                 tabindex="-1"
                                 role="dialog"
                                 aria-labelledby="commentModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-light" style="background:#b90f00">
                                            <h5 class="modal-title" id="commentModalLabel">Add Comment</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form @submit.prevent="submitComment" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name">Document Name</label>
                                                    <input v-model="document.name"
                                                           type="text"
                                                           class="form-control"
                                                           id="name"
                                                           disabled
                                                           required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comment">Comment</label>
                                                    <textarea v-model="newComment.comment"
                                                              rows="5"
                                                              class="form-control"
                                                              id="comment"
                                                              placeholder="Enter your comment"
                                                              required></textarea>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark" style="background:#b90f00" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-dark" style="background:#b90f00">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CommentsComponent",
        data(){
            return {
                newComment: {
                    document_id: '',
                    comment: '',
                },
                comments: [],
                deleted: false,
                submitted: false,
                errors : [],
                document: '',
            }
        },
        mounted() {
            this.document = this.$route.params.document;
            this.newComment.document_id = this.document.id;
            this.getComments(this.document.id);
        },
        methods: {
            submitComment(){
                this.errors = [];
                axios.post('api/comment-store', this.newComment)
                    .then(res =>{
                        this.submitted = true;
                        this.getComments(this.document.id);
                        console.log(res.data);
                    }).catch(err =>{
                    this.errors = err;
                    console.log(this.errors);
                });
            },
            getComments(id){
                this.showComment = !this.showComment;
                this.errors = [];
                axios.get('api/document-comments/'+id)
                    .then(res => {
                        this.comments = res.data;
                        console.log(this.comments);
                    }).catch(err => {
                    console.log(err);
                });
            }
        }
    }
</script>

<style scoped>

</style>
