CREATE TABLE Users(
     id BIGSERIAL PRIMARY KEY,
      firstname VARCHAR(30) NOT NULL,
      lastname VARCHAR(30) NOT NULL,
      mobile_number VARCHAR(20) NOT NULL,
      id_number VARCHAR(15) NULL,
      address TEXT NULL,
      birthday DATE NULL,
      email VARCHAR(200) NOT NULL UNIQUE,
      password TEXT NOT NULL,
      status BOOLEAN NOT NULL DEFAULT TRUE,
     create_at TIMESTAMPTZ NOT NULL DEFAULT now(),
     updated_at TIMESTAMPTZ NOT NULL DEFAULT now(),
     deleted_at TIMESTAMPTZ NULL
);


INSERT INTO users (firstname, lastname, mobile_number, id_number, email, password)

VALUES(
        'Johan',
        'Rojas',
        '3122086464',
        '12345',
        'johanrojas1524@gmail',
        '12345'

);