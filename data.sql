insert into produk values ("NK001", "Air Jordan 1 Low 'Game Royal'","Men", 1000000,"The Air Jordan 1 Low OG remakes the classic sneaker with new colors and textures. Premium materials and accents give fresh expression to an all-time favorite.", "NK001.png"),
("NK002", "Air Jordan 5 Retro 'White and Black'","Men", 1000000,"Get your piece of Jordan history and heritage with the Air Jordan 5 Retro. Based on the classic game shoe from 1990, it has all the iconic details, including the bump-out collar, lace toggle and fighter plane-inspired design lines.", "NK002.png"),
("NK003", "Nike Air Max 80","Men", 1500000,"Lace up and feel the legacy. Produced at the intersection of art, music and culture, this champion running shoe helped define the ‘90s. Worn by presidents, revolutionized through collabs and celebrated through rare colorways, its striking visuals, Waffle outsole, and exposed Air cushioning keep it alive and well.", "NK003.png"),
("NK004", "Nike Free Run Flyknit 2018","Men", 2000000,"Made for short runs when you want a barefoot-like feel, the Nike Free Run 2018 feels super light and flexible. Its sock-like upper has more stretch yarns than previous versions, so it hugs your feet more than ever. The innovative sole has an updated construction, yet still expands and contracts with every movement. The packable design makes the shoe easy to stuff into your bag—so you can get in a few miles on the fly.", "NK004.png"),
("NK005", "NIke Air Max 270","Running", 1500000,"Nike's first lifestyle Air Max brings you style, comfort and big attitude in the Nike Air Max 270. The design draws inspiration from Air Max icons, showcasing Nike's greatest innovation with its large window and fresh array of colors.", "NK005.png")
;

insert into detail values ("NK001", "H25",10), ("NK001", "H26",10), ("NK001", "H27",10), ("NK002", "H26",20), ("NK002", "H27",20), ("NK002", "H28",20), ("NK003", "H27",30), ("NK003", "H28",30), ("NK003", "H29",30);


create view lihatproduk as select id,nama,tipe,harga,poto from produk;
select * from lihatproduk;

create view detailproduk as select a.*, b.stock from lihatproduk a join detail b on a.id = b.idproduk;

create table ukuran (
     idproduk char(5),
     warna varchar(20),
     size char(2),
     primary key (idproduk,warna,size),
     foreign key (idproduk,warna) references warna(idproduk,warna)
     );

insert into warna values ("NK001", "Hitam"),("NK001", "Putih"),("NK001", "Abu");
insert into ukuran values ("NK001", "Hitam", "25"), ("NK001", "Hitam", "26"),("NK001", "Hitam", "27");

create view detailproduks as select a.*, b.warna, b.size, b.stock from lihatproduk a join ukuran b on a.id = b.idproduk;