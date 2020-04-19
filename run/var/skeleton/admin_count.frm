TYPE=VIEW
query=select count(`u`.`id`) AS `count(u.id)` from `skeleton`.`users` `u` join `skeleton`.`roles` `g` join `skeleton`.`role_user` `ug` where ((`ug`.`user_id` = `u`.`id`) and (`ug`.`role_id` = `g`.`id`))
md5=1a952beb5e42ef22fd836b99a21c2aa1
updatable=0
algorithm=0
definer_user=skeleton
definer_host=%
suid=2
with_check_option=0
timestamp=2020-04-13 03:47:22
create-version=1
source=select count(u.id)\n			from users u, roles g ,role_user ug\n			where\n			ug.user_id  = u.id and\n			ug.role_id = g.id
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select count(`u`.`id`) AS `count(u.id)` from `skeleton`.`users` `u` join `skeleton`.`roles` `g` join `skeleton`.`role_user` `ug` where ((`ug`.`user_id` = `u`.`id`) and (`ug`.`role_id` = `g`.`id`))
