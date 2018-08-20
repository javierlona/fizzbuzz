// const FORM = document.querySelector(".btn-primary");


// if( document.readyState === 'complete' ) {
//   console.log( 'document is already ready, just execute code here' );
// } 
// else {
  document.addEventListener('DOMContentLoaded', function () {
  console.log( 'document was not ready, place code here' );
  const ROW_COUNT = document.querySelector("#tbody").rows.length;

  newPanel = document.createElement("div");
  newPanel.classList.add("panel-body");

  const PARENT_TBODY = document.querySelector(".panel-primary");
  newPanel.append(ROW_COUNT);
  PARENT_TBODY.append(newPanel);

  // document.querySelector(".panel-body").innerHTML = ROW_COUNT;
  // console.log(ROW_COUNT);
  });
// }

// function get_row_count(){
//   console.log( 'document was not ready, place code here' );
//   const ROW_COUNT = document.querySelector("#tbody").rows.length;

//   newPanel = document.createElement("div");
//   newPanel.classList.add("panel-body");

//   const PARENT_TBODY = document.querySelector(".panel-primary");
//   newPanel.append(ROW_COUNT);
//   PARENT_TBODY.append(newPanel);

//   // document.querySelector(".panel-body").innerHTML = ROW_COUNT;
//   // console.log(ROW_COUNT);
// }