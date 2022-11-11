BEGIN TRANSACTION;

INSERT INTO "categorias" ("id","nome","descricao") VALUES (1,'Relatar problema em ...',NULL),
 (2,'Solicito informação sobre ...',NULL),
 (3,'Outra solicitação',NULL);
INSERT INTO "perfis" ("id","nome","descricao") VALUES (1,'Administrador',NULL),
 (2,'Usuário',NULL),
 (3,'Técnico',NULL),
 (4,'Supervisor',NULL);
INSERT INTO "setores" ("id","nome","descricao") VALUES (1,'Vox Conexão',NULL),
 (2,'Tecnologia',NULL),
 (3,'Comercial',NULL),
 (4,'Administrativo & Financeiro',NULL),
 (5,'Relacionamento',NULL),
 (6,'Auditoria & Operações',NULL),
 (7,'Almoxarifado & Compras',NULL),
 (8,'RH & DP',NULL),
 (9,'VAD',NULL),
 (10,'CGR',NULL),
 (11,'Diretoria',NULL),
 (12,'Marketing',NULL);
INSERT INTO "usuarios" ("id","created_at","updated_at","nome","nome_usr","perfil_id","setor_id","email","password","email_verified_at","remember_token") VALUES (1,'2022-11-03 11:24:37','2022-11-03 16:03:02','Administrador','administrador',1,1,'administrador@vox.lan','$2y$10$UjczGOUuB.TQqHf5cE3LMuWU8JndyomubsGj1SQJgkHwly6yD4uFe',NULL,NULL),
 (2,'2022-11-03 11:27:10','2022-11-09 01:17:43','Walysson dos Reis','walyssondosreis',3,2,'walyssonp@voxconexao.com.br','$2y$10$g05MYK7/thVvlmRa7GVmSeDkhtqstw7Dv/eKckt4rKfxXqF63wEXC',NULL,NULL),
 (4,'2022-11-09 01:22:36','2022-11-09 01:22:36','Adrianne Nunes de Oliveira','adriannen',2,4,'adrianne.nunes@voxconexao.com.br','$2y$10$BDqDSnbt.W1omRUTFk4AX.leDa9vUEgSeSH6x30zHDydGJV05o3ye',NULL,NULL),
 (5,'2022-11-09 01:29:13','2022-11-09 01:30:06','Bethyenne Machado Gomes','bethyennem',2,7,'compras@voxconexao.com.br','$2y$10$y1A7AzIOKe2moSiutmNZWOLnL/DtXvDv9g5zCT7J1FQA2Nx/3tcqm',NULL,NULL),
 (6,'2022-11-09 01:32:19','2022-11-09 01:32:19','Joyce Jane Melo Dias','joycej',2,6,'joyce.jane@voxconexao.com.br','$2y$10$wqiYndgDxV2k25pbJWE/eOlv77FCj.3jtTaWQjkmpVeBezqLgJWYK',NULL,NULL);
INSERT INTO "estados" ("id","nome","descricao") VALUES (1,'Não atendido',NULL),
 (2,'Em andamento',NULL),
 (3,'Em pausa',NULL),
 (4,'Cancelado',NULL),
 (5,'Finalizado',NULL),
 (6,'Pendente',NULL),
 (7,'Expirado',NULL);
INSERT INTO "alvos" ("id","nome","descricao") VALUES (1,'Gerenet UWBR',NULL),
 (2,'Gerenet MGTO',NULL),
 (3,'Gerenet VCA',NULL),
 (4,'Kentro Ativo',NULL),
 (5,'Kentro Receptivo',NULL),
 (6,'Viabilidade',NULL),
 (7,'PABX Ironvox',NULL),
 (8,'PABX Fastway',NULL),
 (9,'Stratws Siteware',NULL),
 (10,'Elite Software',NULL);
CREATE UNIQUE INDEX IF NOT EXISTS "usuarios_email_unique" ON "usuarios" (
	"email"
);
COMMIT;
