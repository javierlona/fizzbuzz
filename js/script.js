

// function count_rows() {
//   const ROW_COUNT = document.querySelector("#tbody").rows.length;
//   console.log(ROW_COUNT);
// }

const delay = seconds => {
  return new Promise(
    resolve => setTimeout(resolve, seconds * 1000)
  )
};
// demonstrate that this is an async function hence use the async keyword
const countToFive = async() => {
  console.log('zero seconds');
  //  await means is it's going to wait for the value of delay called with one second to be returned before executing any further.
  await delay(1);
  console.log('one second');
  const ROW_COUNT = document.querySelector("#tbody").rows.length;
  console.log(ROW_COUNT);
  await delay(1);
  console.log('two second');
  await delay(3);
  console.log('five seconds');

};
// countToFive();
const SUBMIT_BTN = document.querySelector(".form-horizontal");
SUBMIT_BTN.addEventListener("submit", countToFive, false);