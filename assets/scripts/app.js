const checkFormPayload = () => {
  const title = document.getElementById("title")
  const author = document.getElementById("author")
  const published = document.getElementById("published")
  const price = document.getElementById("price")
  const category = document.getElementById("category")

  if (title.value.length < 5) {
    alert("please should the book name have more than 5 chars")
    return false
  }

  if (author.value.length < 5) {
    alert("please should the book author have more than 5 chars")
    return false
  }

  if (published.value !== '0' && published.value !== '1') {
    alert("please should the book published value be 0 (not published) or 1 (published)")
    return false
  }

  if (isNaN(price.value)) {
    alert("please should the book price be number or fload")
    return false
  }

  if (category.value === '-1') {
    alert("please select a book category")
    return false
  }

  alert('------------ submttt')

  return true
}
