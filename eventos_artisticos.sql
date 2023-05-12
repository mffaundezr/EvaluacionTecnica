
INSERT INTO `eventos` (`id`, `nombre`, `tipo`, `lugar`, `fecha`, `hora_inicio`, `precio`) VALUES
(1, 'Romeo y Julieta', 'Obra de teatro', 'Teatro Municipal Temuco', '2023-05-12', '18:00:00', 10000),
(2, 'Circo Aguilas Humanas', 'Funcion de Circo', 'Recinto Sofo', '2023-05-14', '20:00:00', 8000),
(3, 'Ballet Folklorico', 'Danza', 'Auditorio Universidad Catolica Temuco', '2023-05-17', '11:00:00', 5000);


INSERT INTO `usuarios` (`id`, `rut`, `nombre`, `contacto`) VALUES
(1, '12345678-9', 'Mario Rojas', 999999999),
(2, '9876543-2', 'Juan Perez', 123344555),
(3, '18345672-3', 'Pablo Lopez', 274645656);


INSERT INTO `tickets` (`id`, `id_evento`, `id_usuario`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 1, 1),
(4, 3, 3),
(5, 3, 3);
