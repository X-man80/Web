SELECT dvd.* 
FROM dvd, offer 
WHERE dvd.dvd_id=offer.dvd_id AND offer.offer_date is NOT NULL AND offer.return_date is NULL;