BEGIN TRANSACTION;
INSERT INTO "categorias" ("id","nome","descricao") VALUES (1,'Relatar problema em ...',NULL),
 (2,'Solicito informação sobre ...',NULL);
INSERT INTO "perfis" ("id","nome","descricao") VALUES (1,'Administrador',NULL),
 (2,'Usuário',NULL),
 (3,'Técnico',NULL),
 (4,'Supervisor',NULL);
INSERT INTO "setores" ("id","nome","descricao") VALUES (1,'Vox Conexão',NULL),
 (2,'Tecnologia',NULL),
 (3,'Comercial',NULL);
INSERT INTO "usuarios" ("id","created_at","updated_at","nome","nome_usr","perfil_id","setor_id","email","password","email_verified_at","remember_token") VALUES (1,'2022-11-03 11:24:37','2022-11-03 16:03:02','Administrador','administrador',1,1,'administrador@vox.lan','$2y$10$UjczGOUuB.TQqHf5cE3LMuWU8JndyomubsGj1SQJgkHwly6yD4uFe',NULL,NULL),
 (2,'2022-11-03 11:27:10','2022-11-03 16:03:27','Walysson dos Reis','walyssondosreis',3,1,'walyssonp@voxconexao.com.br','$2y$10$g05MYK7/thVvlmRa7GVmSeDkhtqstw7Dv/eKckt4rKfxXqF63wEXC',NULL,NULL),
 (3,'2022-11-03 16:05:30','2022-11-03 16:05:30','Sabrina Marques','sabrinam',2,3,'sabrina.marques@voxconexao.com.br','$2y$10$UHqC9nqv3wMlrhYDVuiuvub2WAbdt4D8HZV6/gePHmuQ.TINXGgfK',NULL,NULL);
INSERT INTO "alvos" ("id","nome","descricao") VALUES (1,'Gerenet UWBR',NULL),
 (2,'Gerenet MGTO',NULL),
 (3,'Gerenet VCA',NULL);
COMMIT;
