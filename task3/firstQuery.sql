select book.name, group_concat(author.surname)
 from book
join book_genre
 on book_genre.id_book = book.ISBN
join genre
 on genre.id = book_genre.id_genre and genre.name= "фантастика"
join book_author
 on book_author.id_book = book.ISBN
join author
 on author.id = book_author.id_author
group by book.name