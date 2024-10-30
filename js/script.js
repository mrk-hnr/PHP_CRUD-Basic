let button_addFriend = document.getElementById("button_add-friend");
let button_editFriend = document.getElementById("button_edit-friend");
let button_deleteFriend = document.getElementById("button_delete-friend");

let form_addFriend = document.getElementById("form__friend-add");
let form_editFriend = document.getElementById("form__friend-edit");
let form_deleteFriend = document.getElementById("form__friend-delete");

button_addFriend.addEventListener("click", () => {
  linkToForm(form_addFriend);
});

button_editFriend.addEventListener("click", () => {
  linkToForm(form_editFriend);
});

button_deleteFriend.addEventListener("click", () => {
  linkToForm(form_deleteFriend);
});

function linkToForm(id) {
  toggleForm(id);
}

function toggleForm(id) {
  console.log(id);

  if (id.style.display && id.style.display != "none") {
    // Two criteria coz putting only the latter means it only works when showing the element but it won't hide.
    id.style.display = "none";
  } else {
    id.style.display = "block";
  }
}
