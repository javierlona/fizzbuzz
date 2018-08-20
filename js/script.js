console.log("hello");
const FORM = document.querySelector(".btn-primary");
console.log(FORM);

FORM.addEventListener("load", function(event){
  console.log("in hhere");
  const ROW_COUNT = document.querySelector("#tbody").rows.length;
  console.log(ROW_COUNT);
  event.preventDefault();
});

if( document.readyState === 'complete' ) {
  console.log( 'document is already ready, just execute code here' );
  // myInitCode();
} else {
  document.addEventListener('DOMContentLoaded', function () {
  console.log( 'document was not ready, place code here' );
  const ROW_COUNT = document.querySelector("#tbody").rows.length;
  document.querySelector(".panel-body").innerHTML = ROW_COUNT;
  console.log(ROW_COUNT);
  // myInitCode();
  });
}