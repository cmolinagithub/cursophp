SELECT cj_zone.zone_id as "ID", cj_country.name as "PAIS", cj_zone.name as "ESTADO/PROVINCIA", 
cj_zone.code as "CODIGO" FROM cj_zone INNER JOIN cj_country on cj_zone.country_id=cj_country.country_id where cj_zone.status=1;

SELECT cj_zone.zone_id, cj_country.name, cj_zone.name, cj_zone.code FROM cj_zone 
INNER JOIN cj_country on cj_zone.country_id=cj_country.country_id where cj_zone.status=1;

--FINAL
SELECT cj_zone.zone_id "ID", cj_country.name "PAIS", cj_zone.name "ESTADO", 
cj_zone.code "CODIGO" FROM cj_zone INNER JOIN cj_country 
on cj_zone.country_id=cj_country.country_id where cj_zone.status=1;

--ingresos zonas

"INSERT INTO `cj_zone`(`country_id`, `name`, `code`) 
VALUES (:z_country_id, :z_name, :z_code)"