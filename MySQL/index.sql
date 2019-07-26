CREATE TABLE products ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL , 
    `price` FLOAT NOT NULL DEFAULT '0' , 
    `price_promotion` FLOAT NOT NULL DEFAULT '0' , 
    `images` VARCHAR(100) NULL DEFAULT NULL , 
    `decription` TEXT NULL DEFAULT NULL , 
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `product_index` VARCHAR(20) NOT NULL COMMENT 'mã sản phẩm' , 
    PRIMARY KEY (`id`), UNIQUE `ma-san-pham` (`product_index`)
);
ALTER TABLE `products` 
CHANGE `product_index` `product_index` VARCHAR(30) 
NOT NULL COMMENT 'mã sản phẩm';

-- type: id, name, description
CREATE TABLE `php2406`.`type` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL , 
    `description` TEXT NULL DEFAULT NULL , PRIMARY KEY (`id`)
);

ALTER TABLE `products` 
ADD `type_id` INT NOT NULL AFTER `id`;


ALTER TABLE `products` 
ADD  CONSTRAINT `FK_PRODUCTS_VS_TYPE` FOREIGN KEY (`type_id`)
    REFERENCES `type`(`id`);
-- 1-n  n-1 : FK: n
-- 1-1
-- n-n: (1-n - n-1) 

-- users      role_users         roles
-- 11           11-1             1: admin 
-- 22           11-2             2: staff
--              22-2

            
INSERT INTO products(
    type_id, 
    name, 
    price, 
    price_promotion,
    product_index
)
VALUES(
    1,
    'Sản phẩm 1',
    20000,
    18000,
    'SP1'
);
--1. Viết lệnh insert 2 loại sp vào bảng type
INSERT INTO type(
    name,
    description
)
VALUES (
    'Type 40',
    'Mô tả cho loại sp số 40'
);
--2. Viết lệnh insert 2 sp vào bảng products
INSERT INTO products(
    type_id, 
    name, 
    price, 
    price_promotion,
    product_index
)
VALUES
(
    40,
    'Sản phẩm 2',
    25000,
    23000,
    'SP40'
),
(
    2,
    'Sản phẩm số 3',
    5000,
    5000,
    'SP2'
);
-- UPDATE
UPDATE products 
SET images = 'default.png'
WHERE id=3 OR id=2  --  OR : HỢP v
                    --  AND : GIAO ^

-- update cot image = 'default.png' cho
-- san pham co id = 2 va id = 3