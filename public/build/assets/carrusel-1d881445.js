window.addEventListener("load",e=>{s()});var o=0;window.changePunto=function(e,l,n){document.querySelectorAll(".bullet").forEach(u=>{u.classList.remove("active")});var c=document.getElementById("punto_"+n);c.classList.add("active");var a=document.getElementById(e);l==375?o=-w*n:o=-l*n,a.style.transition="all 1s",a.style.marginTop=o+"px"};var t=0;const s=()=>{let e=document.getElementById("number_slider").value;e>1&&(setTimeout(function(){s()},2500),t<e?console.log(t):t=0,changePunto("custom_slider",645,t),t++)};
