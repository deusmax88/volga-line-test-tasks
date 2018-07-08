SELECT
  name, count(phone)

FROM
   users LEFT JOIN phone_numbers ON users.id = phone_numbers.user_id

WHERE
    phone IN ('123', '456', '789')
    AND
  gender = 2
    AND
  birth_date BETWEEN UNIX_TIMESTAMP(CURRENT_DATE() - INTERVAL 22 YEAR) AND
                      UNIX_TIMESTAMP(CURRENT_DATE() - INTERVAL 18 YEAR)

GROUP BY name
ORDER BY null
;

-- Также можно добавить высокоселективный индекс по полю users.birth_date
-- И phone_numbers.user_id,phone_numbers.phone

CREATE INDEX idx_birth_date ON users(birth_date);
CREATE INDEX idx_user_id_phone ON phone_numbers(user_id, phone);



