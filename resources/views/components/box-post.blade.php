<script type="text/x-template" id="pst-box">
  <div class="box"  >
    <h2>@{{title}}</h2>
    <p>@{{content}}</p>
    <p >@{{getLike}}
      <span><i @click="setLiked()" v-bind:class="heartIcon"></i> </span>
      <span><i @click="setComment()"class="far fa-comment "></i></span><br>
    </p>
      <div class="box-comment" v-show="commentbool ">
        <input class="input-comment"v-show="commentbool "type="text" v-model="inpval" placeholder="Inserisci Un Commento..."></input>
        <input  class="input-pubblica"@click="saveComment()" v-show="commentbool " type="submit" value="Pubblica">
      </div>
      <a class="commentlink" @click="showComments()" v-show="!showcommentbool">commenti

      </a><span v-show="showcommentbool" @click="hidecomments()"><i class="fas fa-minus"></i></span>

        <ul  v-show="showcommentbool">
          <li v-for="comment in comments" >@{{comment}}</li>
        </ul>

  </div>
</script>
<script type="text/javascript">
  Vue.component('pst-box',{
    template:'#pst-box',
    props:{
      id:Number,
      title:String,
      content:String,
      likes:Number,
      urllink:String,

    },
    data:function(){
      return{
        liked:false,
        commentbool:false,
        Postcomment:"",
        inpval:this.value,
        comments:[],
        showcommentbool:false

      };
    },
    computed:{
      getLike(){
        var dLike = this.likes;
        if(this.liked){
          dLike ++;
        }
        return dLike;
      },
      heartIcon(){
        if(this.liked){
          return 'fas fa-heart red';
        }else{
          return 'far fa-heart';
        }
      },
    },
    methods:{
      setLiked(){
        this.liked = !this.liked;
      },
      setComment(){
        this.inpval = "";
        this.commentbool = !this.commentbool;

      },
      showComments(){
        comments=this.comments;
        this.showcommentbool = true;
        axios.get('/employee/showpost'+ this.id+'/comments')
              .then(function(data) {
              for (var i = 0; i < data['data'].length; i++) {
                comments.push(data['data'][i]['content']);
              }

              })
              .catch(function(err){console.log(err.message);})

      },
      hidecomments(){
        this.comments=[],
        this.showcommentbool = false;
      },

      saveComment(){
        
        if(this.inpval ==="" || this.inpval ===" "){
          alert("Non puoi inserie ");
        }else{
          var comment={
            _token:token,
            content:this.inpval,
            post_id:this.id
          };
          axios.post('/employee/comment/store',comment)
               .then(function(res){console.log(res);})
               .catch(function(err){console.log(err.message);})

          this.Postcomment = this.inpval;
          this.commentbool = !this.commentbool;

        }
      },
    }

  });



</script>
