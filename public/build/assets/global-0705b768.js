const s=document.getElementById("menu-button"),d=document.getElementById("header_menu");s.addEventListener("click",()=>{s.classList.toggle("button-open"),d.classList.toggle("active");var e=document.getElementById("url").value,t=e+"/assets/icons/icon-park-outline_down.svg",o=e+"/assets/icons/down.png",n=document.getElementById("arrow");n.src=n.src===t?o:t});const u=document.getElementById("plus-button"),m=document.getElementById("despliegue-box");u.addEventListener("click",()=>{m.classList.toggle("active")});const a=document.getElementById("flechaTop");a.addEventListener("click",()=>{window.scrollTo({top:0,behavior:"smooth"})});const c=document.getElementById("menu_button_h"),g=document.getElementById("header_menu_h");c.addEventListener("click",()=>{c.classList.toggle("button-open"),g.classList.toggle("active")});const l=document.getElementById("menu-button-mob"),i=document.getElementById("header_menu-mob");l.addEventListener("click",()=>{l.classList.toggle("button-open"),i.classList.toggle("active");var e=document.getElementById("url").value,t=e+"/assets/icons/icon-park-outline_down.svg",o=e+"/assets/icons/down.png",n=document.getElementById("arrow");n.src=n.src===t?o:t});const r=document.getElementById("plus-button-mob"),v=document.getElementById("despliegue-box-mob");r.addEventListener("click",()=>{v.classList.toggle("active")});