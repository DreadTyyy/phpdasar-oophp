// ambil elemen yang dibutuhkan
const keyword = document.getElementById("keyword");
const searchBtn = document.getElementById("search-button");
const container = document.getElementById("container");

keyword.addEventListener("keyup", () => {
  // persiapan menggunakan ajax
  const xhr = new XMLHttpRequest();
  // cek kesiapakn ajax
  xhr.onreadystatechange = () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax setelah siap
  xhr.open("GET", `ajax/films.php?keyword=${keyword.value}`, true);
  xhr.send();
});
