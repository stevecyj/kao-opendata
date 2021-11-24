axios
  .get("kao.php")
  .then((response) => {
    // data=response.data;
    console.log(response);
  })
  .catch((err) => {
    console.log(err);
  });

console.clear();
