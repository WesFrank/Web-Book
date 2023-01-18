$(document).ready(function(){
    
    function myFunction() {
        
        let booleanVariable = window.localStorage.getItem("darkMode");
        
        console.log(booleanVariable);
            
        if (booleanVariable==="True") {
            
            console.log("booleanVariable === " + booleanVariable);

            console.log("Change Color of background from white to light grey");
            document.body.style.backgroundColor = "#282828";

            console.log("Change Color of Text from light grey to White");
            document.body.style.color = "white";
            
            console.log("Change Colors of Anchor Tags");
            
            colorLinks("#ADD8E6");

            function colorLinks(hex) {
                
                var links = document.getElementsByTagName("a");
                
                for(var i=0;i<links.length;i++) {
                    
                    if(links[i].href) {
                        
                        links[i].style.color = hex;
                        
                    }
                    
                }
                
            }
            
        } else if (booleanVariable === "False") {
                
            console.log("booleanVariable === " + booleanVariable);

            console.log("Change Color of background from white to light grey");
            document.body.style.backgroundColor = "white";

            console.log("Change Color of Text from light grey to White");
            document.body.style.color = "black";
            
            console.log("Change Colors of Anchor Tags");
            
            colorLinks("blue");

            function colorLinks(hex) {
                
                var links = document.getElementsByTagName("a");
                
                for(var i=0;i<links.length;i++) {
                    
                    if(links[i].href) {
                        
                        links[i].style.color = hex;  
                        
                    }
                    
                }
                
            }
            
        }
        
        let HiddenValue = window.localStorage.getItem("Hidden");
        
        console.log(HiddenValue);
        
        if (HiddenValue === "True") {
            
            $('#orderedList').hide();
            $('#hamburger-menu').show();
            
        } else if (HiddenValue === "False") {
            
            $('#orderedList').show();
            $('#hamburger-menu').hide();
            
        }
    
    }
    
    myFunction();

    $("#darkOn").click(function(){
        
        // console.log("darkMode True");
        
        window.localStorage.setItem("darkMode", "True");
        
        myFunction()
        
    });
  
    $("#darkOff").click(function(){
      
        console.log("darkMode False");
        
        window.localStorage.setItem("darkMode", "False");
        
        myFunction()
        
    });
    
    $("#hamburger-menu").click(function(){
      
        console.log("Show Table of Content");
        
        $('#orderedList').show();
        
        window.localStorage.setItem("Hidden", "False");
        
        var ShowValue = window.localStorage.getItem("Hidden");
        
        console.log("ShowValue = " + ShowValue);
        
        $('#hamburger-menu').hide();
        
    });
    
    $("#hide-table-of-contents-button").click(function(){
        
        var element = document.getElementById("orderedList");
        
        console.log("Data Type = " + typeof("element"));

        console.log("Hide Table of Contents");
        
        console.log("id=orderedList");
        
        $('#orderedList').hide();
        
        window.localStorage.setItem("Hidden", "True");
        
        var ShowValue = window.localStorage.getItem("Hidden");
        
        console.log("ShowValue = " + ShowValue);
        
        $('#hamburger-menu').show();
        
    });
  
});