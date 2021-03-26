

<p id="ex">TheQuickBrownFoxJumpsOverTheLazyDog.</p>
<button onclick="arr()">Try</button>
<script type="text/javascript">
	function arr(){
		var er = "TheQuickBrownFoxJumpsOverTheLazyDog."
		var newsen = ""
		er = er.split("");
		er.forEach(newarr);
        function newarr(item, index) {
                   if(item == item.toUpperCase() && index == 0){
                       newsen +=item;
                   }
                   else if(item == item.toUpperCase() && index != 0){
                   	   newsen +=" "+item.toLowerCase();
                   }
                   else if(item == item.toLowerCase() && index != 0){
                   	     newsen+=item;
                   }       
           }
           document.getElementById("ex").innerHTML = newsen;
	}
</script>