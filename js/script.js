// The event is fired when the initial HTML document has been completely 
// loaded and parsed, without waiting for stylesheets, images, and subframes to finish loading
document.addEventListener('DOMContentLoaded', get_table_row_count, false);

function get_table_row_count(){
  // Get the row count begining at the table body
  const ROW_COUNT = document.querySelector("#tbody").rows.length;
  // Create new div element where the row count number will be place
  newPanel = document.createElement("div");
  // Add the class to the div element
  newPanel.classList.add("panel-body");
  // Identify the parent element in the DOM
  const PARENT_TBODY = document.querySelector(".panel-primary");
  // Add text content to the new div
  newPanel.append(ROW_COUNT);
  // Add the text content to the parent element
  PARENT_TBODY.append(newPanel);
  
}