CREATE OR REPLACE VIEW V_KAMPANYE AS
SELECT `kampanye`.`id`, `kampanye`.`poster`, `kampanye`.`judul`, `kampanye`.`deskripsi`, `kampanye`.`status`, `kampanye`.`donasi_id`, `kampanye`.`created_at`,
portal_donasi.nama, portal_donasi.inisial, portal_donasi.JENIS

FROM `kampanye`

LEFT JOIN portal_donasi
ON portal_donasi.id = kampanye.donasi_id