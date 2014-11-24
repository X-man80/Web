CREATE TABLE dvd 
(
	dvd_id INT(11) UNSIGNED auto_increment, 
	title VARCHAR(255), 
	production_year INT(4) UNSIGNED, 
	PRIMARY KEY(dvd_id)
);

CREATE TABLE customer (customer_id INT(11) UNSIGNED auto_increment, first_name VARCHAR(255), last_name VARCHAR(255), passport_code VARCHAR(255), registration_date DATE, PRIMARY KEY(customer_id));
CREATE TABLE offer (offer_id INT(11) UNSIGNED auto_increment, dvd_id INT(11) UNSIGNED, customer_id INT(11) UNSIGNED, offer_date DATE, return_date DATE, PRIMARY KEY(offer_id));