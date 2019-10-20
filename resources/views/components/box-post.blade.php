<script type="text/x-template" id="pst-box">
  <div class="box" >
    <h2>@{{title}}</h2>
    <p>@{{content}}</p>
    <p >@{{getLike}}
      <span><i @click="setLiked()" v-bind:class="heartIcon"></i> </span>
      <span><i @click="setComment()"class="far fa-comment "></i></span><br>
    </p>
      <div class="box-comment" v-show="commentbool && !savebool">
        <input class="input-comment"v-show="commentbool && !savebool"type="text" v-model="inpval" placeholder="Inserisci Un Commento..."></input>
        <input  class="input-pubblica"@click="saveComment()" v-show="commentbool && !savebool " type="submit" value="Pubblica">
      </div>
      <a  v-bind:href="urllink">
          commenti
      </a>
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
        savebool:false,
        inpval:this.value,
        commentcontain:false,

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
        this.savebool = false;
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
          this.commentcontain = true;
          this.Postcomment =  this.Postcomment + this.inpval;
          this.savebool = !this.savebool;
          this.commentbool = !this.commentbool;

        }
      },
    }

  });



</script>
