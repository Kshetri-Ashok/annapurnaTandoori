CREATE DATABASE IF NOT EXISTS Menu_db;
USE Menu_db;
CREATE TABLE IF NOT EXISTS `Entrantes` (
   `mem_id` int(11) NOT NULL,
  `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Entrantes`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Entrantes`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Samosa Vegetal (2 Unds)', '4.50', 'Empanadillas de masa crujiente rellenas de patata y especias.(ALERGENOS: Gluten, frutos secos)');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Samosa de pollo (2 Unds) ', '4.50', 'Empanadillas de masa casera rellenas de pechuga de pollo picada y especias. (ALERGENOS: Gluten, frutos secos)');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pakora vegetal', '4.25', 'Tiras de verduras rebozadas en harina de garbanzos.');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pakora de Gambas', '5.75', 'Gambas peladas rebozadas en harina de garbanzos.');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pakora de Pollo', '4.50', 'Trocitos de pechuga de pollo rebozados en harina de garbanzos.');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Aloo Chop', '4.50', 'Pastelitos de patatas y cebolla rebozado en harina de garbanzos.');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Sheek Kebab', '5.25', 'Brocheta de cordero picado, cocinada en tandoorí con especias y hierbas.');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Cebolla Bhaji', '4.25', 'Tiras de cebolla rebozados en harina de garbanzos.');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Surtido de Aperitivos', '8.50', 'Samosa, pakora vegetal, pakora de pollo y sheek kebab (para 2 personas).(ALERGENOS: Gluten, frutos secos)');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Momo (8 Unds)', '7.95', 'Empanadilla de carne picada de pechuga de pollo cocido al vapor, Servido con achar nepáli.(ALERGENOS: Gluten, sesamo)');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Ensalada Mixta', '5.50', 'Lechuga, tomate, cebolla, atún, maiz dice etc.(ALERGENOS: Sulfitos, Lacteos)');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Ensalada Especial Annapurna', '6.95', 'Ensalada mixta con pollo tikka y queso fresco.(ALERGENOS: Sulfitos, Lacteos)');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Sopa de pollo', '4.95', 'Ensalada mixta con pollo tikka y queso fresco.(ALERGENOS: Sulfitos, Lacteos)');

INSERT INTO `Entrantes` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Sopa de Verdura', '4.95', 'Sopa de verdura con hierbas aromáticas.(ALERGENOS: Lacteos)');

CREATE TABLE IF NOT EXISTS `RecomendacionSizzler` (
   `mem_id` int(11) NOT NULL,

  `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `RecomendacionSizzler`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `RecomendacionSizzler`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Sekuwa ', '12.50', 'Pollo al estilo tradicional nepali elaborado en horno tandoorí.');
INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Pahadi', '12.50', 'Pechuga de pollo marinado con ajo, jengibre, guindilla verde y especias.');
INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Hariyali ', '12.50', 'Pechuga de pollo marinado con yogur, menta y especías..(ALERGENOS: Lacteos, frutos secos)');
INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Achari ', '12.50', 'Pechuga de pollo marinado. ligeramente picante con achar nepali asado en horno tandoori.');
INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Malai Tikka', '11.95', 'Tierna pechuga de pollo marinada con ajo, jengibre, almendras y nata fresca.(ALERGENOS: Lacteos, frutos secos)');
INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Cordero Sekuwa', '13.95', 'Cordero preparado en horno tandoorí estilo tradicional nepali.');
INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Cordero Pahadi', '13.95', 'Cordero marinado con ajo, jengibre, guindilla verde y especias.');
INSERT INTO `RecomendacionSizzler` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Cordero Achari ', '13.95', 'Cordero marinado ligeramente picante con achar nepali asado en horno tandoorí.');

CREATE TABLE IF NOT EXISTS `RecomendacionCurry` (
   `mem_id` int(11) NOT NULL,
  `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `RecomendacionCurry`
 ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `RecomendacionCurry`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `RecomendacionCurry` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Butter Chicken', '11.95', 'Pollo tandoori cocinado con una salsa suave de almendras, tomate, Mantequilla y Nata fresca.(ALERGENOS: Lacteos, frutos secos)');
INSERT INTO `RecomendacionCurry` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Mango', '11.95', 'Pechuga de pollo cocinada con salsa de mango, coco, nata fresca y unas salsa suave de curry.(ALERGENOS: Lacteos, frutos secos)');
INSERT INTO `RecomendacionCurry` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Hawai', '11.50', 'Pechuga de pollo cocinada con piña, coco, nata fresca y una salsa suave de curry.(ALERGENOS: frutos secos , Lacteos)');
INSERT INTO `RecomendacionCurry` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Cordero Roganjush', '12.95', 'Clásico curry de cordero con saña de tomate y hierbas.(ALERGENOS: frutos secos)');
INSERT INTO `RecomendacionCurry` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Goan King Prawn Curry', '13.95', 'Langostinos tigre preparado con leche de coco, cebolla, semillas de mostaza, salsa de tomate y especias.(ALERGENOS: frutos secos , Lacteos)');
INSERT INTO `RecomendacionCurry` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Butter Paneer Masala', '12.95', 'Queso casero cocinado con una salsa suave de almendras, tomate, Mantequilla y Nata fresca.(ALERGENOS: frutos secos , Lacteos)');

CREATE TABLE IF NOT EXISTS `Postres` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Postres`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Postres`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `Postres` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Gulab Jamun', '3.50', 'Bolitas de leche frita en almibar. (ALERGENOS: Gluten, Lacteos)');

INSERT INTO `Postres` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Kulfi de Mango', '4.95', 'Tipico fielado indio casero sabor mango. (ALERGENOS: Frutos secos , Lacteos y Sulfitos)');

INSERT INTO `Postres` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Kulfi de Pistacho', '4.95', 'Tipico helado casero hindu avomatCAiialion pistacho. (ALERGENOS: frutos secos, Lacteos)');

INSERT INTO `Postres` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Lassi de Mango', '3.95', 'Yogur batido cremoso aromatizado con mango. (ALERGENOS: Sulfitos, Lacteos)');

INSERT INTO `Postres` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Lassi Dulce', '3.50', 'Cremoso batido de yogur natural azucarado. (ALERGENOS: Lacteos)');

INSERT INTO `Postres` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Bajar Halwa', '3.95', 'Tradicional pastel de zanahoria tipico indio. (ALERGENOS: Frutos secos, Lacteos)');

INSERT INTO `Postres` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Mango Cream', '3.95', 'Crema de Mango Casera.(ALERGENOS: Sulfitos)');

CREATE TABLE IF NOT EXISTS `Alergenos` (
   `mem_id` int(11) NOT NULL,
  `Nombre`varchar(3071)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Alergenos`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Alergenos`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Gluten');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Pescado');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Huevos');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Crustaceos');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Cacahutes');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Soja');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Lacteos');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Frutos de Cascara');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Dioxido de azufre y sulfitos');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('sesamo');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Altiamuces');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Moluscos');
INSERT INTO `Alergenos` (`Nombre`) VALUES
('Moztaza');

CREATE TABLE IF NOT EXISTS `Curry_Dishes` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Curry_Dishes`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Curry_Dishes`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `Curry_Dishes` (`Nombre`, `Precio` ) VALUES
('Pollo al Curry ', '10.50');
INSERT INTO `Curry_Dishes` (`Nombre`, `Precio` ) VALUES
('Cordero al Curry', '11.85');
INSERT INTO `Curry_Dishes` (`Nombre`, `Precio` ) VALUES
('Pescado al Curry', '10.95');
INSERT INTO `Curry_Dishes` (`Nombre`, `Precio` ) VALUES
('Gambas al Curry', '12.50');

CREATE TABLE IF NOT EXISTS `Horno_Tandoori` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Horno_Tandoori`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Horno_Tandoori`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Tandoori', '11.50', 'Pollo marinado con yogur, lima, ajo, jengibre y hierbas.(ALERGENOS: Lacteos)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Tikka', '11.50', 'Trozos de pechuga marinados con yogur, lima, ajo, jengibre y salsa de soja.(ALERGENOS: Lacteos)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Tikka con Queso', '12.50', 'Pollo Tikka preparado con Queso.(ALERGENOS: Lacteos)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pollo Tikka Manchurian', '11.50', 'Pollo tillka cocinado con pimiento verde y rojo, cebolla, especias, hierbas y salsa de soja.(ALERGENOS: Lacteos, soja)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Cordero Tikka', '12.95', 'Tiernos trocitos de cordero marinados con yogur, lima, ajo y jengibre. (ALERGENOS: Lacteos)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Cordero Tikka Manchurian', '12.85', 'Cordero tikka cocinado con pimiento verde y rojo, cebolla, hierbas y salsa de soja.(ALERGENOS: Crustaceos, Soja)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Pescado al Tandoori', '11.95', 'Trozos de emperador marinados con majo Jempibre, lima y otras especias.(ALERGENOS: Pescado)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Gambas Manchuri', '12.50', 'Gambas peladas cocinado con pimiento verde y rojo, cebola, especias, hierbas y salsa de soja.(ALERGENOS: Crustaceos, Soja)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('King Prawn Tandoori', '14.95', 'Langostinos tigre marinados con yogur, ajo, jengibre, lima y hierbas aromáticas.(ALERGENOS: Crustaceos, Lacteos)');
INSERT INTO `Horno_Tandoori` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Annapurna Mix Grill', '15.95', 'Combinado de pollo ti£ka, pollo tandoori, cordero tikka, gambon al Tañdoori y Sheek kebabs(ALERGENOS: Crustaceos, Lacteos)');

CREATE TABLE IF NOT EXISTS `Tikka_Masala` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Tikka_Masala`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Tikka_Masala`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `Tikka_Masala` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Masala','11.50');
INSERT INTO `Tikka_Masala` (`Nombre`, `Precio`) VALUES
('Cordero Tikka Masala','12.50');
INSERT INTO `Tikka_Masala` (`Nombre`, `Precio`) VALUES
('Pescado Tikka Masala','11.95');
INSERT INTO `Tikka_Masala` (`Nombre`, `Precio`) VALUES
('Gambas Tikka Masala','12.50');



  CREATE TABLE IF NOT EXISTS `Platos_Pasanda` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Pasanda`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Pasanda`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
INSERT INTO `Platos_Pasanda` (`Nombre`, `Precio`) VALUES
('Pollo Pasanda','11.50');
INSERT INTO `Platos_Pasanda` (`Nombre`, `Precio`) VALUES
('Cordero Pasada','12.50');
INSERT INTO `Platos_Pasanda` (`Nombre`, `Precio`) VALUES
('Gambas Pasada','12.50');


  CREATE TABLE IF NOT EXISTS `Platos_Korma` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Korma`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Korma`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Korma` (`Nombre`, `Precio`) VALUES
('Pollo Korma','11.50');
INSERT INTO `Platos_Korma` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Korma','11.95');
INSERT INTO `Platos_Korma` (`Nombre`, `Precio`) VALUES
('Cordero Korma','12.50');
INSERT INTO `Platos_Korma` (`Nombre`, `Precio`) VALUES
('Gambas Korma','12.50');

  CREATE TABLE IF NOT EXISTS `Platos_Karahi` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Karahi`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Karahi`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Karahi` (`Nombre`, `Precio`) VALUES
('Pollo Karabi','10.95');
  INSERT INTO `Platos_Karahi` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Karahi','11.50');
  INSERT INTO `Platos_Karahi` (`Nombre`, `Precio`) VALUES
('Cordero Karahi','12.50');
  INSERT INTO `Platos_Karahi` (`Nombre`, `Precio`) VALUES
('Gambas Karahi','12.50');

  CREATE TABLE IF NOT EXISTS `Platos_Jalfrezi` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Jalfrezi`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Jalfrezi`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Jalfrezi` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Jalfrez','11.50');
  INSERT INTO `Platos_Jalfrezi` (`Nombre`, `Precio`) VALUES
('Cordero Jalfrezi','11.50');
  INSERT INTO `Platos_Jalfrezi` (`Nombre`, `Precio`) VALUES
('Gambas Jalfrezi','12.50');
  INSERT INTO `Platos_Jalfrezi` (`Nombre`, `Precio`) VALUES
('Pollo Jalfrezi','10.95');
 CREATE TABLE IF NOT EXISTS `Platos_Espinaca` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Espinaca`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Espinaca`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Espinaca` (`Nombre`, `Precio`) VALUES
('Pollo Tikka con Espinaca','10.95');
  INSERT INTO `Platos_Espinaca` (`Nombre`, `Precio`) VALUES
('Pollo con Espinaca','10.50');
  INSERT INTO `Platos_Espinaca` (`Nombre`, `Precio`) VALUES
('Cordero con Espinaca','12.50');
  INSERT INTO `Platos_Espinaca` (`Nombre`, `Precio`) VALUES
('Gambas con Espinaca','12.50');



 CREATE TABLE IF NOT EXISTS `Platos_Bhuna` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Bhuna`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Bhuna`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Bhuna` (`Nombre`, `Precio`) VALUES
('Pollo Bhauna','10.95');
  INSERT INTO `Platos_Bhuna` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Bhuna','11.95');
  INSERT INTO `Platos_Bhuna` (`Nombre`, `Precio`) VALUES
('Cordero Bhuna','12.50');
  INSERT INTO `Platos_Bhuna` (`Nombre`, `Precio`) VALUES
('Gambas Bhuna','12.50');



 CREATE TABLE IF NOT EXISTS `Platos_Balti` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Balti`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Balti`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Balti` (`Nombre`, `Precio`) VALUES
('
Pollo Balti','10.95');
INSERT INTO `Platos_Balti` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Balti','11.50');
INSERT INTO `Platos_Balti` (`Nombre`, `Precio`) VALUES
('Cordera Balti','12.50');
INSERT INTO `Platos_Balti` (`Nombre`, `Precio`) VALUES
('Gambas Balti','12.50');


 CREATE TABLE IF NOT EXISTS `Platos_Dansak` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Dansak`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Dansak`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Dansak` (`Nombre`, `Precio`) VALUES
('Pollo Dansak','10.75');
 INSERT INTO `Platos_Dansak` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Dansak','11.50');
 INSERT INTO `Platos_Dansak` (`Nombre`, `Precio`) VALUES
('Cordero Dansak','12.50');
 INSERT INTO `Platos_Dansak` (`Nombre`, `Precio`) VALUES
('Gambas Dansak','12.50');



 CREATE TABLE IF NOT EXISTS `Platos_Madras` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Madras`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Madras`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Madras` (`Nombre`, `Precio`) VALUES
('Pollo Madras','10.95');
  INSERT INTO `Platos_Madras` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Madras','11.50');
 INSERT INTO `Platos_Madras` (`Nombre`, `Precio`) VALUES
('Cordera Madras','12.50');
 INSERT INTO `Platos_Madras` (`Nombre`, `Precio`) VALUES
('Gambas Madras','12.50');


 CREATE TABLE IF NOT EXISTS `Platos_Vindaloo` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Vindaloo`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Vindaloo`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Vindaloo` (`Nombre`, `Precio`) VALUES
('Pollo Vindaloo','10.95');
  INSERT INTO `Platos_Vindaloo` (`Nombre`, `Precio`) VALUES
('Pollo Tikka Vindaloo','11.50');
  INSERT INTO `Platos_Vindaloo` (`Nombre`, `Precio`) VALUES
('Cordero Vindaloo ','12.50');
  INSERT INTO `Platos_Vindaloo` (`Nombre`, `Precio`) VALUES
('Gambas Vindaloo','12.50');




CREATE TABLE IF NOT EXISTS `Platos_Verduras` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Verduras`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Verduras`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Vegetal Mixta Curry', '9.75', 'Verdura según temporada con salsa de curry y hierbas temporada. (ALERGENOS: Frutos secos, Lacteos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Vegetal Madras', '10.50', 'Verduras cocinada con una salsa picante y coco. (ALERGENOS: Frutos secos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Malai Kofta', '10.50', 'Albondigas de verdura y paneer en salsa cremosa de almendras y frutos secos (ALERGENOS: Frutos secos, Lacteos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Paneer Espinaca', '10.50', 'Trozos de paneer (queso casero indio) con espinaca, tomate, fenogreco y especias (ALERGENOS: Frutos secos, Lacteos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Lentejas Tadka', '9.95', 'Clasicas lentejas indias amarillas con especias y hierbas. (ALERGENOS: Frutos secos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Lentejas Makhani', '9.95', 'Clasicas lentejas indias amarillas con especias y hierbas. (ALERGENOS: Frutos secos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Garbanzos Masala', '9.95', 'Clasicas lentejas indias amarillas con especias y hierbas. (ALERGENOS: Frutos secos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Champiñón Bhaji', '9.95', 'Champinn fresco salteado con cebolla, ajo, tomate y hierbas. (ALERGENOS: Frutos secos, Lacteos)');
INSERT INTO `Platos_Verduras` (`Nombre`, `Precio`, `Descripcion`) VALUES
('Paneer Manchurian', '11.50', 'Queso casero fncio cocinado con pimiento verde y rojo, cebolla, especias, hierbas y salsa de soja.(ALERGENOS: Frutos secos, Lacteos y Soja)');





 CREATE TABLE IF NOT EXISTS `Platos_Biryani` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Biryani`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Biryani`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Platos_Biryani` (`Nombre`, `Precio`) VALUES
('Verduras','11.50');
  INSERT INTO `Platos_Biryani` (`Nombre`, `Precio`) VALUES
('Pollo','12.50');
  INSERT INTO `Platos_Biryani` (`Nombre`, `Precio`) VALUES
('Cordero','13.50');
INSERT INTO `Platos_Biryani` (`Nombre`, `Precio`) VALUES
('Gambas','13.50');
  INSERT INTO `Platos_Biryani` (`Nombre`, `Precio`) VALUES
('Especial Biryani Annapurné','14.50');



 CREATE TABLE IF NOT EXISTS `Menu_para_Niños` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Menu_para_Niños`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Menu_para_Niños`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Menu_para_Niños` (`Nombre`) VALUES
('Pollo Korma con Arroz Basmati');
 INSERT INTO `Menu_para_Niños` (`Nombre`) VALUES
('Pollo Tikka Masala con Arraz Basmati');
 INSERT INTO `Menu_para_Niños` (`Nombre`) VALUES
('Pollo Tikka con Arroz Basmati');
 INSERT INTO `Menu_para_Niños` (`Nombre`) VALUES
('Pollo Mango con Arroz Basmati');
 INSERT INTO `Menu_para_Niños` (`Nombre`) VALUES
('Arroz salteado con huevos rotos');
 INSERT INTO `Menu_para_Niños` (`Nombre`) VALUES
('Nuggets de Pollo con patatas ó Arroz');



CREATE TABLE IF NOT EXISTS `Menu_para_Niños_Precio` (
   `mem_id` int(11) NOT NULL,
  `Precio` double(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Menu_para_Niños_Precio`
  ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Menu_para_Niños_Precio`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;
  INSERT INTO `Menu_para_Niños_Precio` (`Precio`) VALUES
('6.95');


CREATE TABLE IF NOT EXISTS `Platos_Basmati` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Platos_Basmati`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Platos_Basmati`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

  INSERT INTO `Platos_Basmati` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Arroz blanco', '3.50', 'Arroz basmati al vapor.');
  INSERT INTO `Platos_Basmati` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Arroz pulau', '4.00', 'Arroz basmati con cardamom, canefa, anis estrellado, clavo y azafran.');
  INSERT INTO `Platos_Basmati` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Kasmiri Pulau', '4.50', 'Arroz Basmati con frutos secos y azafrén. (ALERGENOS: Frutos secos, Lacteos)');
  INSERT INTO `Platos_Basmati` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Arroz champinién', '4.50', 'Arroz basmati con champinénes frescos.');
  INSERT INTO `Platos_Basmati` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Arroz Keema', '4.50', 'Arroz basmati con carne picada');
  INSERT INTO `Platos_Basmati` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Arraoz Limén', '4.50', 'Arroz basmati con limén fresco.');


CREATE TABLE IF NOT EXISTS `Pan` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Pan`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Pan`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

  INSERT INTO `Pan` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Naan','2.75','Tipico pan Hindi de harina de trigo, preparadg en fiorno tandoori. (ALERGENOS: Gluten, Lacteos)');
  INSERT INTO `Pan` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Naan con Ajo','3.00','pan Hindu con ajo (ALERGENOS: Gluten, Lacteos)');
  INSERT INTO `Pan` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Naan con Queso','4.75','Pan Hindu relleno con Queso. (ALERGENOS: Gluten, Lacteos)');
  INSERT INTO `Pan` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Naan Makhani','3.75','Pan Hindi con Mantequilfa. (ALERGENOS: Gluten, Lacteos)');
  INSERT INTO `Pan` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Naan con Cebolla','3.50','Pan Hindu relleno con Cebolla. (ALERGENOS: Gluten, Lacteos)');
  INSERT INTO `Pan` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Naan Peshwari','3.75','Pan Hindu relleno de almendras, coco y frutos secos. (ALERGENOS: Gluten, Lacteos)');
  INSERT INTO `Pan` (`Nombre`, `Precio`, `Descripcion`) VALUES
  ('Keema Naan','3.75','Pan Hindi relleno con carne picada. (ALERGENOS: Gluten, Lacteos)');
  



CREATE TABLE IF NOT EXISTS `Menú_Degustación` (
   `mem_id` int(11) NOT NULL,
   `Nombre`varchar(3071)  NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `Menú_Degustación`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Menú_Degustación`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

  INSERT INTO `Menú_Degustación` (`Nombre`,`Descripcion`) VALUES
  ('Aperitivo','Papadam con salsa');
  INSERT INTO `Menú_Degustación` (`Nombre`,`Descripcion`) VALUES
  ('Entrantes','Samosa Pakora Vegetal pollo Tikka');
  INSERT INTO `Menú_Degustación` (`Nombre`,`Descripcion`) VALUES
  ('Platos Principales','Pollo Tikka Masala Cordero Roganjosh Dhal Makhni');
  INSERT INTO `Menú_Degustación` (`Nombre`,`Descripcion`) VALUES
  ('Acompañamiento','Arroz Pilau Naan');
  INSERT INTO `Menú_Degustación` (`Nombre`,`Descripcion`) VALUES
  ('Postres','Kulfi Mango Lassi');
  INSERT INTO `Menú_Degustación` (`Nombre`,`Descripcion`) VALUES
  ('Incluye','Refrescos ó Copa de Vino ó Doble Caña');
  



CREATE TABLE IF NOT EXISTS `Menú_Degustación_Precio` (
   `mem_id` int(11) NOT NULL,
  `Precio` double(12,2) NOT NULL,
  `Descripcion`varchar(4000) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `Menú_Degustación_Precio`
   ADD PRIMARY KEY (`mem_id`);


ALTER TABLE `Menú_Degustación_Precio`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;COMMIT;

  INSERT INTO `Menú_Degustación_Precio` (`Precio`,`Descripcion`) VALUES
  ('56.00','Para 2 Personas');






