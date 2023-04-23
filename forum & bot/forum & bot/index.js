var data= {
    chatinit:{
        title: ["Hello <span class='emoji'> &#128075;</span>","I am the Farmer bot","How can I help you?"],
        options: ["Trends","News","Shopping","Advice"]
    },

    Trends: {
        title:["Please select category"],
        options:['land','capital','resources','Others'],
        url : {
            
        }
    },
    
    news: {
        title:["Today's Top 5 Headlines in the field of Agriculture"],
        options:["Rajasthan ","Young Bureaucrat , Earns PM's Award Nomination","Karnataka","Tea"],
        url : {
            more:"https://krishijagran.com/news",
            link:["https://krishijagran.com/news","https://krishijagran.com/news","https://krishijagran.com/news","https://krishijagran.com/news"]
        }
    },
    shopping: {
        title:["Thanks for your response","Welcome to shopping zone","Please select one of the below options to proceed further"],
        options:['Machinery','Crop_Nutrition','Seeds','Crop_Protection'],
        url : {
            
        }
    },
    Machinery: {
        title:["Thanks for your response","Here are some electronic items for you","Click on it to know more"],
        options:['Farm implements','Solar insect traps','Farm machinery','Hand tools','Irrigation kits'],
        url : {
            more:"https://www.bighaat.com/",
            link:["#","#","#","#","#"]
        }
    },
    Crop_Nutrition:{
        title:["Thanks for your response","Here are some Crop Nutrition products for you","Click on it to know more"],
        options:['Major nutrients','Anti Stressing Agents','Bio Fertilizer','Organic Fertilizer'],
        url : {
            more:"https://www.bighaat.com/",
            link:["#","#","#","#"]
        }
    },
    Seeds: {
        title:["Thanks for your response","These are some results based on your input","Click on it to know more"],
        options:['Flower seeds','Maize/Corn','Paddy','Cotton'],
        url : {
            more:"https://www.bighaat.com/",
            link:["#","#","#","#"]
        }
    },
    Crop_Nutrition: {
        title:["Thanks for your response","These are some results based on your input","Click on it to know more"],
        options:['Insecticides','Fungicides','Herbicides','Traps','Lures'],
        url : {
            more:"https://www.bighaat.com/",
            link:["#","#","#","#","#"]
        }
    },

    Advice: {
        title:["These are some common questions you can take advice on  <span class='emoji'> &#127925;</span>"],
        options: ["Crop selection and planting","Crop care and maintenance","Harvesting and storage","Soil management","Pest control"],
        url : {
            
        }
    },
    Crop_selection: {
        title: ["Thanks for your response"],
        options: ["Comedy","Horror","Sci-Fi","Romance","Action"],
        url: {
            more:"https://www.youtube.com/@webhub/videos",
            link:["#","#","#","#","#"]
        }
    },
    bollywood: {
        title: ["Thanks for your response"],
        options: ["Comedy","Horror","Sci-Fi","Romance","Action"],
        url: {
            more:"https://www.youtube.com/@webhub/videos",
            link:["#","#","#","#","#"]
        }
    },
    web: {
        title: ["Thanks for your response"],
        options: ["Comedy","Horror","Sci-Fi","Romance","Action"],
        url: {
            more:"https://www.youtube.com/@webhub/videos",
            link:["#","#","#","#","#"]
        }
    },
    others: {
        title: ["Here are some more options for you"],
        options: ["YouTube","Netflix","Amazon Prime","Hot Star"],
        url: {
            more:"https://www.youtube.com/",
            link:["#","#","#","#","#"]
        }
    },
}

document.getElementById("init").addEventListener("click",showChatBot);
var cbot=document.getElementById("chat-box");

var len1 = data.chatinit.title.length;

function showChatBot(){
    console.log(this.innerText);
    if(this.innerText=='START CHAT'){
        document.getElementById("test").style.display='block';
        document.getElementById('init').innerText='CLOSE CHAT';
        initChat();
    }
    else{
        location.reload();
    }    
}

function initChat(){
    j=0;
    cbot.innerHTML = '';
    for(var i=0;i<len1;i++){
        setTimeout(handleChat,(i*500));
    }

    setTimeout(function(){
        showOptions(data.chatinit.options)
    },((len1+1)*500))
}

var j=0;
function handleChat(){
    console.log(j);
    var elm = document.createElement("p");
    elm.innerHTML=data.chatinit.title[j];
    elm.setAttribute("class","msg");
    cbot.appendChild(elm);
    j++;
    handleScroll();
}

function showOptions(options){
    for(var i=0;i<options.length;i++){
        var opt = document.createElement("span");
        var inp = '<div>'+options[i]+'</div>';
        opt.innerHTML = inp;
        opt.setAttribute("class","opt");
        opt.addEventListener("click",handleOpt);
        cbot.appendChild(opt);
        handleScroll();
    }
}

function handleOpt(){
    console.log(this);
    var str= this.innerText;
    var textArr = str.split(" ");
    var findText=textArr[0];
    document.querySelectorAll(".opt").forEach(el=>{el.remove();})
    var elm = document.createElement("p");
    elm.setAttribute("class","test");
    var sp ='<span class="rep">'+findText+'</span>';
    elm.innerHTML=sp;
    cbot.appendChild(elm);

    console.log(findText.toLowerCase());
    var tempObj=data[findText.toLowerCase()];
    handleResults(tempObj.title,tempObj.options,tempObj.url);
}

function handleResults(title,options,url){
    for(let i=0;i<title.length;i++){
        var elm =document.createElement("p");
        elm.innerHTML=title[i];
        elm.setAttribute("class","msg");
        cbot.appendChild(elm);
    }
    const isObjectEmpty = (url)=>{
        return JSON.stringify(url)==="{}";
    }

    if(isObjectEmpty(url)==true){
        console.log("having more options");
        showOptions(options);
    }

    else{
        console.log("end result");
        handleOptions(options,url);
    }
}

function handleOptions(options,url){
    for(var i=0;i<options.length;i++){
        var opt=document.createElement("span");
        var inp ='<a class="m-link" href="'+url.link[i]+'>'+options[i]+'</a>';

        opt.innerHTML=inp;
        opt.setAttribute("class","opt");
        cbot.appendChild(opt);
    }
    var opt=document.createElement("span");
    var inp ='<a class="m-link" href="'+url.more+'>'+'See more</a>';

    const isObjectEmpty = (url)=>{
        return JSON.stringify(url)==="{}";
    }

    console.log(isObjectEmpty(url));
    console.log(url);
    opt.innerHTML=inp;
    opt.setAttribute("class","opt link");
    cbot.appendChild(opt);
    handleScroll();
}

function handleScroll(){
    var elm = document.getElementById('chat-box');
    elm.scrollTop=elm.scrollHeight;
}


