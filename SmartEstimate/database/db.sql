-- 
-- Creating Tables
--

CREATE TABLE public.advertisement_comments (
    id integer NOT NULL,
    advertisement_id integer NOT NULL,
    comment_type_id integer NOT NULL,
    message character varying,
    updated_on timestamp without time zone DEFAULT now() NOT NULL,
    updated_by integer NOT NULL,
    created_on timestamp without time zone DEFAULT now() NOT NULL,
    created_by integer NOT NULL
);

CREATE TABLE public.properties (
    id integer NOT NULL,
    title character varying NOT NULL,
    description character varying NOT NULL,
    price integer,
    images character varying NOT NULL,
    project_name character varying,
    survey_number character varying,
    address_line_1 character varying NOT NULL,
    address_line_2 character varying NOT NULL,
    near_by character varying NOT NULL,
    city character varying NOT NULL,
    state character varying NOT NULL,
    country character varying NOT NULL,
    zip integer NOT NULL,
    house_type integer NOT NULL,
    construction_status integer,
    furnishing integer,
    bathrooms integer,
    total_floors integer,
    floor_no integer,
    facing integer,
    car_parking integer,
    super_builtup_area integer,
    carpet_area integer,
    monthly_maintenance integer,
    purchased_date date,
    advertisement_status_type_id integer DEFAULT 0 NOT NULL,
    product_status_id integer DEFAULT 0 NOT NULL,
    updated_on timestamp without time zone DEFAULT now() NOT NULL,
    updated_by integer NOT NULL,
    created_on timestamp without time zone DEFAULT now() NOT NULL,
    created_by integer NOT NULL
);

CREATE TABLE public.house_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    description character varying NOT NULL
);

CREATE TABLE public.comment_types (
    id integer NOT NULL,
    name character varying NOT NULL
);

CREATE TABLE public.product_statuses (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);

CREATE TABLE advertisement_status_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    description character varying NOT NULL
);

CREATE TABLE construction_status_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    description character varying NOT NULL
);

CREATE TABLE furnishing_status_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);

CREATE TABLE facing_types (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying NOT NULL,
    email character varying NOT NULL,
    password character varying NOT NULL,
    hash character varying,
    is_admin boolean DEFAULT false NOT NULL,
    phone bigint NOT NULL,
    city character varying NOT NULL,
    updated_on timestamp without time zone DEFAULT now() NOT NULL,
    updated_by integer NOT NULL,
    created_on timestamp without time zone DEFAULT now() NOT NULL
);

CREATE TABLE public.contact_us (
    id integer NOT NULL,
    name character varying NOT NULL,
    email character varying NOT NULL,
    contact bigint NOT NULL,
    message character varying NOT NULL,
    solved boolean DEFAULT false NOT NULL,
    created_on timestamp without time zone DEFAULT now() NOT NULL
);

--
-- Adding Sequences for IDs
--

CREATE SEQUENCE public."users_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE;
ALTER SEQUENCE public."users_id_seq" OWNED BY public.users.id;
ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public."users_id_seq"'::regclass);

CREATE SEQUENCE public."advertisement_comments_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE;
ALTER SEQUENCE public."advertisement_comments_id_seq" OWNED BY public.advertisement_comments.id;
ALTER TABLE ONLY public.advertisement_comments ALTER COLUMN id SET DEFAULT nextval('public."advertisement_comments_id_seq"'::regclass);

CREATE SEQUENCE public."properties_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE;
ALTER SEQUENCE public."properties_id_seq" OWNED BY public.properties.id;
ALTER TABLE ONLY public.properties ALTER COLUMN id SET DEFAULT nextval('public."properties_id_seq"'::regclass);

CREATE SEQUENCE public."contact_us_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE;
ALTER SEQUENCE public."contact_us_id_seq" OWNED BY public.contact_us.id;
ALTER TABLE ONLY public.contact_us ALTER COLUMN id SET DEFAULT nextval('public."contact_us_id_seq"'::regclass);

-- 
-- Adding Default entries
--

INSERT INTO public.comment_types (id, name) VALUES
(0,	'like'),
(1,	'dislike'),
(2,	'message');

INSERT INTO public.product_statuses (id, name) VALUES	
(0,	'For Sale'),
(1,	'Sold'),
(2,	'Not for Sale');

INSERT INTO public.facing_types (id, name) VALUES	
(0,	'East'),
(1,	'West'),
(2,	'North'),
(3,	'South');

INSERT INTO public.advertisement_status_types (id, name, description) VALUES	
(0,	'Pending', 'Pending for Review'),
(1,	'Survey', 'Approved and Under Survey'),
(2,	'Published', 'Approved and published'),
(3,	'Rejected', 'Refused for publish');

INSERT INTO public.construction_status_types (id, name, description) VALUES	
(0,	'Ready', 'Ready to Move'),
(1,	'Construction', 'Under Construction');

INSERT INTO public.furnishing_status_types (id, name) VALUES	
(0,	'Well Furnished'),
(1,	'Moderate Furnishing'),
(2,	'Poor Furnishing'),
(3,	'Unfurnished');

INSERT INTO public.house_types (id, name, description) VALUES	
(0,	'1R', 'One Room'),
(1,	'1RK', 'One Room + Kitchen'),
(2,	'1BHK-F', 'One BHK Flat'),
(3,	'1BHK-B', 'One BHK Bunglow'),
(4,	'2BHK-F', 'Two BHK Flat'),
(5,	'2BHK-B', 'Two BHK Bunglow'),
(6,	'3BHK-F', 'Three BHK Flat'),
(7,	'3BHK-B', 'Three BHK Bunglow');

INSERT INTO public.users (id, name, email, password, is_admin, phone, city, updated_by) VALUES
(0,	'Admin', 'admin@srea.com',	'srea12345', 'true', 1234567890, 'Pune', 0);

-- 
-- Adding Constraints
--

ALTER TABLE ONLY public.advertisement_comments
    ADD CONSTRAINT advertisement_comments_pkey PRIMARY KEY (id);

ALTER TABLE ONLY public.properties
    ADD CONSTRAINT properties_id PRIMARY KEY (id);

ALTER TABLE ONLY public.comment_types
    ADD CONSTRAINT comment_types_pkey PRIMARY KEY (id);

ALTER TABLE ONLY public.house_types
    ADD CONSTRAINT house_types_pkey PRIMARY KEY (id);

ALTER TABLE ONLY public.product_statuses
    ADD CONSTRAINT product_statuses_pkey PRIMARY KEY (id);

ALTER TABLE ONLY public.advertisement_status_types
    ADD CONSTRAINT advertisement_status_types_pkey PRIMARY KEY (id);

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_ukey_email UNIQUE (email);

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);

ALTER TABLE ONLY public.advertisement_comments
    ADD CONSTRAINT advertisement_comments_created_by_fkey FOREIGN KEY (created_by) REFERENCES public.users(id);

ALTER TABLE ONLY public.advertisement_comments
    ADD CONSTRAINT advertisement_comments_fkey_advertisement_id FOREIGN KEY (advertisement_id) REFERENCES public.properties(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY public.advertisement_comments
    ADD CONSTRAINT advertisement_comments_fkey_comment_types_id FOREIGN KEY (comment_type_id) REFERENCES public.comment_types(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY public.advertisement_comments
    ADD CONSTRAINT advertisement_comments_updated_by_fkey FOREIGN KEY (updated_by) REFERENCES public.users(id);

ALTER TABLE ONLY public.properties
    ADD CONSTRAINT properties_fkey1_user_id FOREIGN KEY (created_by) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY public.properties
    ADD CONSTRAINT properties_fkey_product_statuses_id FOREIGN KEY (product_status_id) REFERENCES public.product_statuses(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY public.properties
    ADD CONSTRAINT properties_fkey_user_id FOREIGN KEY (updated_by) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY public.properties
    ADD CONSTRAINT properties_fkey_status_type_id FOREIGN KEY (advertisement_status_type_id) REFERENCES public.advertisement_status_types(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY public.properties
    ADD CONSTRAINT properties_fkey_house_type_id FOREIGN KEY (house_type) REFERENCES public.house_types(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_updated_by_fkey FOREIGN KEY (updated_by) REFERENCES public.users(id) ON UPDATE CASCADE ON DELETE CASCADE;

--
-- PostgreSQL Database for SmartEstimate system
--