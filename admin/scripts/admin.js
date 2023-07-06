const baseUrl = localStorage.getItem("base_url");
console.log(baseUrl);

const get_subjects = () => {
  return fetch(`${baseUrl}/admin/api/subjects.php`).then((subjects) => {
    return subjects.json();
  });
};
