var app = {
	 storyHandler:function (){
		var $container = $('section.main');
        var $addStory = find('#post');



         var storyParameters = {

        updateStory: function() {
 		var output = "";
 		for(var i = 0; i < stories.users.length; i++){
        output+= 
		'<p> <i class="fa fa-comments"></i>  &nbsp<b>'+ stories.users[i].story +'</p></b>'
		}
		  $(".post").html(output);
		},
		 saveStory: function() {
                //method that saves the story in local storage
                localStorage.setItem("storyStg", JSON.stringify(stories));
        },
         createStory: function() {
                var $input = $("#input").clone().val();//gets the text put in the text area
 				stories.users.unshift({
 					 story: $input,
 				}/
 				});
				stories.allPosts++;
  				}

       			 };//end story parameter
       			 $.extend(stories, storyParameters);   //method
       			 //console.log(stories);
        		//calls create story when clicked
        		$addStory.on('click', function(e){
            		//console.log($(this));//consoles the button when clicked
            		//console.log(e)
            		e.stopPropagation();
            		stories.createStory();
            		stories.saveStory();
            		stories.updateStory();
        		});
        		stories.updateStory();
       			 stories.saveStory();
    		},//end of storyHandler
}