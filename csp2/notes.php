TESTERS are items that were intended to be placed on the counter of a department store for customers to sample. 
They are usually unboxed or in a simple brown or white box. 
Testers are always fresh, new, and completely full but sometimes they do not have a cap.


BRAND
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

VOLUME
('100 ml'),
('125 ml'),
('150 ml'),
('200 ml'), 
('50 ml'),
('65 ml'),
('75 ml'),
('80 ml'),
('90 ml');

PRODUCTS (product_name, price, volume_id, gender_id, brand_id, stocks_id, packaging_id)
('212 Men 100ml TB'), ('550'), ('100ml'), ('Men'), ('Carolina Herrera'), ('In Stock'), ('Tester Box'), 
('212 Men 100ml OB'), ('750'), ('100ml'), ('Men'), ('Carolina Herrera'), ('In Stock'), ('Original Box'), 
('212 VIP Men 80ml OB'), ('380'), ('80ml'), ('Men'), ('Carolina Herrera'), ('In Stock'), ('Original Box'), 
('Bvlgari Aqva Marine 100ml TB'), ('550'), ('100ml'), ('Men'), ('Bvlgari'), ('In Stock'), ('Tester Box'), 
('Bvlgari Aqva Marine 100ml OB'), ('750'), ('100ml'), ('Men'), ('Bvlgari'), ('In Stock'), ('Original Box'), 
('CK Be (unisex) 200ml TB'), ('800'), ('200ml'), ('Unisex'), ('Calvin Klein'), ('In Stock'), ('Tester Box'), 
('CK Eternity 100ml TB'), ('550'), ('100ml'), ('Men'), ('Calvin Klein'), ('In Stock'), ('Tester Box'), 
('CK Eternity 100ml OB'), ('750'), ('100ml'), ('Men'), ('Calvin Klein'), ('In Stock'), ('Original Box'), 
('CK One (unisex) 200ml TB'), ('800'), ('200ml'), ('Unisex'), ('Calvin Klein'), ('In Stock'), ('Tester Box'), 
('Kenzo Blue 100ml TB (Out of Stock)'), ('550'), ('100ml'), ('Men'), ('Kenzo'), ('Out of Stock'), ('Tester Box'), 
('Lacoste Cool Play Blue 125ml TB(Out of Stock)'), ('650'), ('125ml'), ('Men'), ('Lacoste'), ('Out of Stock'), ('Tester Box'), 
('Bvlgari Omnia Amethyste 65ml TB'), ('450'), ('65ml'), ('Women'), ('Bvlgari'), ('In Stock'), ('Tester Box'), 
('Bvlgari Omnia Amethyste 65ml OB'), ('500'), ('65ml'), ('Women'), ('Bvlgari'), ('In Stock'), ('Original Box'), 
('Bvlgari Omnia Coral 65ml OB'), ('500'), ('65ml'), ('Women'), ('Bvlgari'), ('In Stock'), ('Original Box'), 
('Bvlgari Omnia Crystalline 65ml TB'), ('450'), ('65ml'), ('Women'), ('Bvlgari'), ('In Stock'), ('Tester Box'), 
('Bvlgari Omnia Crystalline 65ml OB'), ('500'), ('65ml'), ('Women'), ('Bvlgari'), ('In Stock'), ('Original Box'), 
('Jo Malone Wood Sage & Sea Salt Edp 100ml OB (unisex)'), ('750'), ('100ml'), ('Unisex'), ('Jo Malone'), ('In Stock'), ('Original Box'), 
('Katy Perry Meow 100ml TB (Out of Stock)'), ('550'), ('100ml'), ('Women'), ('Katy Perry'), ('Out of Stock'), ('Tester Box'), 
('Katy Perry Purr 100ml TB (Out of Stock)'), ('550'), ('100ml'), ('Women'), ('Katy Perry'), ('Out of Stock'), ('Tester Box'), 
('Lanvin Eclat 100ml TB'), ('550'), ('100ml'), ('Women'), ('Lanvin'), ('In Stock'), ('Tester Box'), 
('Lanvin Eclat 100ml OB'), ('750'), ('100ml'), ('Women'), ('Lanvin'), ('In Stock'), ('Original Box');

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
('men'), ('women'), ('unisex');

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
