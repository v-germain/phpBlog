class Admin {
    constructor() {
        this.list = document.getElementById("postView");
        this.post = document.getElementById("createPost");
        this.comment = document.getElementById("commentMod");
        this.toggleList = document.getElementById("toggleList");
        this.toggleNew = document.getElementById("toggleNew");
        this.toggleComment = document.getElementById("toggleComment");
    }

    displayList() {
        this.toggleList.addEventListener("click", () => {
            this.list.style.display="block";
            this.post.style.display="none";
            this.comment.style.display="none";
        });
        /*document.getElementById("toggleList").addEventListener("click", () => {
            document.getElementById("postView").style.display="block";
            document.getElementById("createPost").style.display="none";
            document.getElementById("commentMod").style.display="none";
        });*/
    }

    displayPost() {
        this.toggleNew.addEventListener("click", () => {
            this.list.style.display="none";
            this.post.style.display="block";
            this.comment.style.display="none";
        });
        /*document.getElementById("toggleNew").addEventListener("click", () => {
            document.getElementById("postView").style.display="none";
            document.getElementById("createPost").style.display="block";
            document.getElementById("commentMod").style.display="none";
        });*/
    }

    displayComment() {
        this.toggleComment.addEventListener("click", () => {
            this.list.style.display="none";
            this.post.style.display="none";
            this.comment.style.display="block";
        });
        /*document.getElementById("toggleComment").addEventListener("click", () => {
            document.getElementById("postView").style.display="none";
            document.getElementById("createPost").style.display="none";
            document.getElementById("commentMod").style.display="block";
        });*/
    }
}