import {projects} from "./project.js";
import {getProjectSummary} from "./project.js";

const summaries = projects.map(getProjectSummary);

console.log(summaries);
