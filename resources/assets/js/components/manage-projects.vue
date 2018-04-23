<template>
	<div class="col-md-12">
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
					Projects
					<button @click="createNewProject" class="btn-primary btn">
						Create New Projects
					</button>
				</div>
				<div class="card-body">
					<ul class="list-group">
						<li class="list-group-item">Project 1</li>
						<li class="list-group-item">Project 2</li>
						<li class="list-group-item">Project 3</li>
						<li class="list-group-item">Project 4</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						Project Details
					</div>
					<div class="card-body">
						
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						Deployments
					</div>
					<div class="card-body">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default{
	name:'manage-projects',
	data(){
		return {

		}
	},
	methods:{
		createNewProject(){
			// creating a new project

		}
	}
}
</script>