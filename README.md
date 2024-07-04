#### Database structure

Table Name：user_info

| 参数      | 类型                          | null     |
| --------- | ----------------------------- | -------- |
| user_id   | int（11） AUTO_INCREMENT      | not null |
| firstname | tinytext                      | not null |
| lastname  | tinytext                      | not null |
| role      | enum('administrator',casual') | not null |
| email     | varchar                       | not null |
| password  | varchar                       |          |

Limit: PRIMARY KEY (`user_id`)



Table Name： votes

| 参数       | 类型                                | null     |
| ---------- | ----------------------------------- | -------- |
| vote_id    | int(11) AUTO_INCREMENT              | NOT NULL |
| vote_title | varchar(255)                        | NOT NULL |
| vote_type  | enum('ONE_ON_ONE','GROUP')          | NOT NULL |
| created_by | int(11)                             | NOT NULL |
| created_at | datetime  DEFAULT CURRENT_TIMESTAMP | NOT NULL |

Limit: PRIMARY KEY (`vote_id`),  FOREIGN KEY (`created_by`) REFERENCES `users`(`user_id`)



Table Name： vote_records

| 参数        | 类型                                | null     |
| ----------- | ----------------------------------- | -------- |
| record_id   | int(11) AUTO_INCREMENT  PRIMARY KEY | NOT NULL |
| vote_id     | int(11)                             | NOT NULL |
| user_id     | int(11)                             | NOT NULL |
| vote_result | ENUM('YES', 'NO')                   | NOT NULL |
| voted_at    | datetime  DEFAULT CURRENT_TIMESTAMP | NOT NULL |

 FOREIGN KEY (`vote_id`) REFERENCES `votes`(`vote_id`),  FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`)