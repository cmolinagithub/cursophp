SELECT cj_country.name  , cj_zone.name, cj_zone.code  
FROM cj_country inner join cj_zone 
on (cj_country.country_id=cj_zone.country_id);