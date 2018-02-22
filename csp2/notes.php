TESTERS are items that were intended to be placed on the counter of a department store for customers to sample. 
They are usually unboxed or in a simple brown or white box. 
Testers are always fresh, new, and completely full but sometimes they do not have a cap.


GENDER (3)
1	Men
2	Women
3	Unisex
	
PACKAGING (2)
1	Original Box
2	Tester Box
	
STOCK (2)
1	In Stock
2	Out of Stock

VOLUME (9)	
1	100 ml
2	125 ml
3	150 ml

BRAND (34)		
('Acqua Di Gio'),
('Burberry'),
('Bvlgari'),
('Calvin Klein'),
('Carolina Herrera'),
('Chanel'),
('Christian Dior'),
('Clinique'),
('Dior'),
('Dolce & Gabbana'),
('Donna Karan'),
('Elizabeth Arden'),
('Escada'),
('Estee Lauder'),
('Giorgio Armani'),
('Gucci'),
('Hermes'),
('Hugo Boss'),
('Issey Miyake'),
('Jo Malone'),
('Katy Perry'),
('Kenzo'),
('Lacoste'),
('Lancome'),
('Lanvin'),
('Louis Vuitton'),
('Marc Jacobs'),
('Mont Blanc'),
('Paris Hilton'),
('Ralph Lauren'),
('Salvatore Ferragamo'),
('Tommy Hilfiger'),
('Versace'),
('Yves Saint Laurent');

PRODUCTS (product_name, price, volume_id, gender_id, brand_id, stocks_id, packaging_id, image)
('212 Men 100ml TB	550	1	1	5	1	2	assets/images/212men.jpg')
('212 Men 100ml OB	750	1	1	5	1	1	assets/images/212men.jpg
('212 Sexy Men 100ml OB	750	1	1	5	1	1	assets/images/212sexymen.jpg
('Acqua Di Gio 100ml TB	550	1	1	1	1	2	assets/images/212men.jpg
('Acqua Di Gio 100ml OB	750	1	1	1	1	1	assets/images/212men.jpg
('Bvlgari Aqva Marine 100ml TB	550	1	1	3	1	2	assets/images/bvlgari-omnia-amethyste.jpg
('Bvlgari Aqva 100ml TB	550	1	1	3	1	2	assets/images/bvlgari-omnia-amethyste.jpg
('Bvlgari Blv 100ml TB	550	1	1	3	1	2	assets/images/bvlgari-omnia-amethyste.jpg
('Bvlgari Extreme 100ml OB	750	1	1	3	1	1	assets/images/bvlgari-omnia-amethyste.jpg
('Bvlgari Man 100ml OB	750	1	1	3	1	1	assets/images/bvlgari-omnia-amethyste.jpg
('Bvlgari Man Extreme 100ml OB	750	1	1	3	1	1	assets/images/bvlgari-omnia-amethyste.jpg
('Bvlgari Man in Black 100ml OB	750	1	1	3	1	1	assets/images/bvlgari-omnia-amethyste.jpg

IMAGES
('assets/images/212men.png')
('assets/images/212sexymen.jpg')
('assets/images/bvlgari-omnia-amethste.jpg')
('assets/images/ck-eternity-for-men.jpg')
('assets/images/LanvinEclat.png')

CUSTOMER (email, image, username, password, first_name, last_name, address, contact)
('chellie.ilustre@gmail.com'), (''), ('chelliegmail'), ('5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'), ('chelliegmail'), ('ilustre'), ('Kamuning Quezon City'), ('09876543210');
('chellie.ilustre@yahoo.com'), (''), ('chellieyahoo'), ('5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'), ('chellieyahoo'), ('ilustre'), ('Kamuning Quezon City'), ('09876543210');
('rochelle.ilustre@yahoo.com'), (''), ('rochelleyahoo'), ('5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'), ('rochelleyahoo'), ('ilustre'), ('Kamuning Quezon City'), ('09876543210');

USERS (email, image, username, password, first_name, last_name, contact, role)
('admin@gmail.com', 'image', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'adminfirstname', 'adminlastname', '09876543210', 'role'),
('email', 'image', 'username', 'password', 'first_name', 'last_name', 'contact', 'role'),
('email', 'image', 'username', 'password', 'first_name', 'last_name', 'contact', 'role'),
('email', 'image', 'username', 'password', 'first_name', 'last_name', 'contact', 'role'),

GENDER (name)
('men'), 	1
('women'), 	2
('unisex');	3

MY CART (product_id, quantity, subtotal, buyer_id, date)
('product_id', 'quantity', 'subtotal', 'buyer_id', 'date'), 
('product_id', 'quantity', 'subtotal', 'buyer_id', 'date'), 
('product_id', 'quantity', 'subtotal', 'buyer_id', 'date'), 
('product_id', 'quantity', 'subtotal', 'buyer_id', 'date');

PACKAGING (name)
('tester box'), ('original box');

PLACE ORDER (product_id, quantity, subtotal, buyer_id, reference_number)
('product_id', 'quantity', 'subtotal', 'buyer_id', 'reference_number'), 
('product_id', 'quantity', 'subtotal', 'buyer_id', 'reference_number'), 
('product_id', 'quantity', 'subtotal', 'buyer_id', 'reference_number'), 
('product_id', 'quantity', 'subtotal', 'buyer_id', 'reference_number');

PURCHASE (reference_number, total, shipping_status_id, customer_id)
('reference_number', 'total', 'shipping_status_id', 'customer_id'),
('reference_number', 'total', 'shipping_status_id', 'customer_id'),
('reference_number', 'total', 'shipping_status_id', 'customer_id'),
('reference_number', 'total', 'shipping_status_id', 'customer_id');

SHIPPING STATUS (description)
('pending'), ('shipping'), ('delivered');

STOCKS (name)
('In stock'), ('Out of stock');
