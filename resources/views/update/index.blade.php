@extends('app')

@section('content')

<!--
<div>
    <form action = "/edit/<?php echo $article[0]->id; ?>" method = "post">
        <table>
            <tr>
                <td>First Name</td>
                <td>
                <input type = 'text' name = 'first_name'
                value = '<?php echo$article[0]->creator; ?>'/> </td>
            </tr>
            <tr>
                <td colspan = '2'>
                 <input type = 'submit' value = "Update" />
                </td>
            </tr>
        </table>
    </form>
</div>