// video cards

// const videoCards = document.querySelectorAll(".card-video");

// for(let i = 0; i<videoCards.length; i++){
//     videoCards[i].addEventListener('mouseover',function(e){
//         videoCards[i].play()
//     })
//     videoCards[i].addEventListener('mouseleave',function(e){
//         videoCards[i].pause()
//     })
// }

document.querySelector(".card-video").addEventListener("mouseover",function(){
    this.play();
})

document.querySelector(".card-video").addEventListener("mouseleave",function(){
    this.pause();
})

// const videos = document.querySelectorAll(".card-video");
// videos.forEach(video =>{
//     video.addEventListener("mouseover", function(){
//         this.play();
//     })
// })

// const videos = document.querySelectorAll(".card-video")

// videos.forEach(video => {
//   video.addEventListener("mouseover", function () {
//     this.play()
//   })
  
//   video.addEventListener("mouseout", function () {
//     this.pause()
//   })
  
//   video.addEventListener("touchstart", function () {
//     this.play()
//   })
  
//   video.addEventListener("touchend", function () {
//     this.pause()
//   })
// })

var container = document.querySelector('.container');
container.addEventListener('scroll', function() {
  window.scrollBy(0, container.scrollTop);
});
