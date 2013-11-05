-- For the recommender engine, we need a new index
create index writer_index on comments(writer);
