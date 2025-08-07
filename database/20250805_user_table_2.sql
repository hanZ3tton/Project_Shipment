CREATE TABLE IF NOT EXISTS shipment (
  `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `item_name` varchar(500) NOT NULL,
  `sender_full_name` varchar(500) NOT NULL,
  `sender_email` varchar(500) NOT NULL,
  `sender_address` varchar(500) NOT NULL,
  `sender_phone_number` varchar(500) NOT NULL,
  `sender_country` varchar(500) NOT NULL,
  `sender_city` varchar(500) NOT NULL,
  `sender_postal_code` varchar(500) NOT NULL,
  `receiver_full_name` varchar(500) NOT NULL,
  `receiver_phone_number` integer NOT NULL,
  `receiver_email` varchar(500) NOT NULL,
  `receiver_address` varchar(500) NOT NULL,
  `receiver_country` varchar(500) NOT NULL,
  `receiver_city` varchar(500) NOT NULL,
  `receiver_postal_code` varchar(500) NOT NULL,
  `shipment_price` integer NOT NULL,
  `receipt_code` varchar(500) NOT NULL,
  `weight` integer NOT NULL,
  `lenght` varchar(500) NOT NULL,
  `widht` varchar(500) NOT NULL,
  `height` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL,
  `user_id` integer NOT NULL,
  `service_id` integer NOT NULL,
  `category_id` bigint NOT NULL
);

CREATE TABLE IF NOT EXISTS status (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `status_description` varchar(500) NOT NULL
);

CREATE TABLE IF NOT EXISTS inbound (
  `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `shipment_id` varchar(500),
  `goods_company` varchar(500),
  `domestic_courier_name` varchar(500),
  `domestic_airway_bill` varchar(500),
  `receiver_full_name` varchar(500),
  `weight` decimal,
  `goods_category` varchar(500),
  `notes` varchar(500),
  `date` timestamp,
  `field_12` bigint,
  `field_12` bigint
);

CREATE TABLE IF NOT EXISTS outbound (
  `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `shipment_id` integer,
  `courier_id` integer,
  `outbound_date` date,
  `departure_location` varchar(500),
  `destination_location` varchar(500),
  `status` text,
  `updated_at` timestamp
);

CREATE TABLE IF NOT EXISTS shipment_status (
  `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `receipt_code` varchar(500) NOT NULL,
  `current_location` varchar(500) NOT NULL,
  `shipment_id` integer NOT NULL,
  `status_id` integer NOT NULL
);

CREATE TABLE IF NOT EXISTS shipment_service (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `service` varchar(500) NOT NULL
);

CREATE TABLE IF NOT EXISTS courier (
  `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_number` varchar(500) NOT NULL,
  `vehicle` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL
);

CREATE TABLE IF NOT EXISTS category (
  `id` bigint NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(500) NOT NULL,
  `code` varchar(500) NOT NULL
);

CREATE TABLE IF NOT EXISTS user (
  `id` integer NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `phone_number` integer NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `postal_code` integer NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` date NOT NULL
);

ALTER TABLE shipment ADD CONSTRAINT shipment_category_id_fk FOREIGN KEY (`service_id`) REFERENCES shipment_service (`id`);
ALTER TABLE shipment ADD CONSTRAINT shipment_category_id_fk FOREIGN KEY (`category_id`) REFERENCES category (`id`);
ALTER TABLE shipment_status ADD CONSTRAINT shipment_status_receipt_code_fk FOREIGN KEY (`receipt_code`) REFERENCES shipment (`receipt_code`);
ALTER TABLE shipment_status ADD CONSTRAINT shipment_status_status_id_fk FOREIGN KEY (`status_id`) REFERENCES status (`id`);
ALTER TABLE shipment ADD CONSTRAINT shipment_user_id_fk FOREIGN KEY (`user_id`) REFERENCES user (`id`);
ALTER TABLE shipment ADD CONSTRAINT shipment_id_fk FOREIGN KEY (`id`) REFERENCES shipment_status (`id`);

CREATE INDEX idx_shipment_receipt_code ON shipment (`receipt_code`);
CREATE INDEX idx_shipment_user_id ON shipment (`user_id`);
CREATE INDEX idx_shipment_service_id ON shipment (`service_id`);
CREATE INDEX idx_shipment_category_id ON shipment (`category_id`);
CREATE INDEX idx_shipment_status_id ON shipment_status (`status_id`);
CREATE INDEX idx_shipment_service ON shipment_service (`service`);
CREATE INDEX idx_courier_email ON courier (`email`);
CREATE INDEX idx_user_email ON user (`email`);