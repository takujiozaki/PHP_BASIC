#USER情報を設定

CREATE table users (userid VARCHAR(20) primary key, password CHAR(60), username varchar(100));
INSERT INTO users VALUES ('UID0000001', '$2y$10$2T//iHixLoX21pXKw8MSjuT91hVTPQ0Z0XGq8IE5JSgceM4I7lA5S','松本'); # abcd1234
INSERT INTO users VALUES ('UID0000002', '$2y$10$Dz/nvZo79sxixPUPG2gdIef.0J9tJ1WBirgto5JzMHQAx7HrOdqoy','石原'); # abcd5678