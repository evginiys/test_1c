select author.surname,COUNT(*)
from author join book_author on book_author.id_author = author.id
group by author.surname ORDER BY 2 DESC LIMIT 1