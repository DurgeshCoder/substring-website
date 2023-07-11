const baseUrl = localStorage.getItem("base_url");
console.log(baseUrl);

const get_subjects = () => {
  return fetch(`${baseUrl}/admin/api/subjects.php`).then((subjects) => {
    return subjects.json();
  });
};
  

const get_subject_by_id = (id) => {
  return fetch(`${baseUrl}/admin/api/subjects.php/${id}`).then((subjects) => {
    return subjects.json();
  })
}


