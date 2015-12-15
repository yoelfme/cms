<?php

namespace Cms\Section;

interface SectionRepoInterface
{
    public function findOrFail($id);

    public function search(array $data = [], $paginate = false);

    public function create(array $data);

    public function update($entity, array $data);

    public function delete($entity);
}
