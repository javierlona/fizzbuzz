document.addEventListener('DOMContentLoaded', get_table_row_count, false);

function get_table_row_count(){
  const ROW_COUNT = document.querySelector("#tbody").rows.length;

  newPanel = document.createElement("div");
  newPanel.classList.add("panel-body");

  const PARENT_TBODY = document.querySelector(".panel-primary");
  newPanel.append(ROW_COUNT);
  PARENT_TBODY.append(newPanel);
  
}