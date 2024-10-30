let button_addFriend = document.getElementById("button_add-friend");
let button_editFriend = document.getElementById("button_edit-friend");
let button_deleteFriend = document.getElementById("button_delete-friend");

button_addFriend.addEventListener("click", () => {
  toggleForm(button_addFriend);
});

button_editFriend.addEventListener("click", () => {
  toggleForm(button_editFriend);
});

button_deleteFriend.addEventListener("click", () => {
  toggleForm(button_deleteFriend);
});

// document.addEventListener("DOMContentLoaded", function () {
//   addbutton.addEventListener("click", function () {
//     toggleFunction(addbutton);
//   });
//   deletebutton.addEventListener("click", function () {
//     toggleFunction(deletebutton);
//   });
// });

function toggleForm(id) {
  console.log(id);

  if (id.style.display && id.style.display != "none") {
    // Two criteria coz putting only the latter means it only works when showing the element but it won't hide.
    id.style.display = "none";
  } else {
    id.style.display = "block";
  }
}
